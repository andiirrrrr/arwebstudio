<?php

namespace App\Support;

use Illuminate\Support\Facades\Storage;

class ImageOptimizer
{
    protected string $format;

    protected int $quality;

    protected int $maxDimension;

    protected bool $stripOriginal;

    public function __construct()
    {
        $this->format = strtolower((string) config('image.format', 'webp'));
        $this->quality = (int) config('image.quality', 80);
        $this->maxDimension = (int) config('image.max_dimension', 1920);
        $this->stripOriginal = (bool) config('image.strip_original', true);
    }

    public static function make(): static
    {
        return new static();
    }

    /**
     * Optimasi sebuah file gambar di dalam disk.
     *
     * Mengembalikan path baru (relatif terhadap root disk) setelah konversi,
     * atau null jika file tidak bisa dioptimasi / sudah dalam format target /
     * terjadi kegagalan (file asli tetap dipertahankan).
     */
    public function optimize(string $disk, string $path): ?string
    {
        $storage = Storage::disk($disk);

        if (! $storage->exists($path)) {
            return null;
        }

        $absolute = $storage->path($path);
        $info = @getimagesize($absolute);

        if ($info === false) {
            return null;
        }

        $sourceFormat = $this->mimeToType($info['mime'] ?? null);

        if ($sourceFormat === null) {
            return null;
        }

        // Jika sudah dalam format target, hindari re-encode lossy berulang.
        if (strtolower(pathinfo($path, PATHINFO_EXTENSION)) === $this->format) {
            return null;
        }

        $image = @imagecreatefromstring((string) @file_get_contents($absolute));

        if ($image === false) {
            return null;
        }

        // Pertahankan transparansi untuk sumber PNG/WebP.
        $hasAlpha = in_array($sourceFormat, ['png', 'webp'], true);

        if ($hasAlpha) {
            imagealphablending($image, false);
            imagesavealpha($image, true);
        }

        $width = imagesx($image);
        $height = imagesy($image);

        // Resize bila dimensi melebihi batas (sisi terpanjang).
        if ($this->maxDimension > 0 && max($width, $height) > $this->maxDimension) {
            $scale = $this->maxDimension / max($width, $height);
            $newWidth = (int) round($width * $scale);
            $newHeight = (int) round($height * $scale);

            $resized = imagecreatetruecolor($newWidth, $newHeight);

            if ($resized === false) {
                imagedestroy($image);

                return null;
            }

            if ($hasAlpha) {
                imagealphablending($resized, false);
                imagesavealpha($resized, true);
            }

            imagecopyresampled($resized, $image, 0, 0, 0, 0, $newWidth, $newHeight, $width, $height);
            imagedestroy($image);
            $image = $resized;
        }

        $newPath = preg_replace('/\.(jpe?g|png|gif|webp|avif)$/i', '', $path) . '.' . $this->format;

        if ($newPath === $path) {
            imagedestroy($image);

            return null;
        }

        // Tulis ke file sementara di direktori yang sama (hindari masalah rename antar-drive).
        $targetDir = $storage->path(dirname($newPath));

        if (! is_dir($targetDir)) {
            $storage->makeDirectory(dirname($newPath));
        }

        $tmpTarget = $targetDir . DIRECTORY_SEPARATOR . '.' . uniqid('opt_') . '.' . $this->format;

        $encoded = $this->encode($image, $tmpTarget);
        imagedestroy($image);

        if (! $encoded || ! file_exists($tmpTarget)) {
            @unlink($tmpTarget);

            return null;
        }

        // Pindahkan hasil ke lokasi final, lalu hapus file asli.
        $finalAbsolute = $storage->path($newPath);
        @rename($tmpTarget, $finalAbsolute);

        if (! $storage->exists($newPath)) {
            @unlink($tmpTarget);

            return null;
        }

        if ($this->stripOriginal && $path !== $newPath) {
            $storage->delete($path);
        }

        return $newPath;
    }

    /**
     * Optimasi semua gambar yang direferensikan di dalam HTML konten artikel.
     */
    public function optimizeHtml(string $html, string $disk = 'public'): string
    {
        if (empty($html)) {
            return $html;
        }

        $converted = [];

        return preg_replace_callback(
            '/(src|href)=(["\'])([^"\']*\.(?:jpe?g|png|gif|webp|avif))\2/i',
            function (array $matches) use ($disk, &$converted) {
                $url = $matches[3];

                if (! preg_match('#(?:^|/)storage/(.+)$#i', $url, $pathMatch)) {
                    return $matches[0];
                }

                $path = $pathMatch[1];

                if (! isset($converted[$path])) {
                    $converted[$path] = $this->optimize($disk, $path) ?? $path;
                }

                if ($converted[$path] === $path) {
                    return $matches[0];
                }

                $newUrl = str_replace($path, $converted[$path], $url);

                return $matches[1] . '=' . $matches[2] . $newUrl . $matches[2];
            },
            $html
        );
    }

    protected function encode($image, string $target): bool
    {
        if ($this->format === 'avif' && function_exists('imageavif')) {
            return @imageavif($image, $target, $this->quality);
        }

        if (function_exists('imagewebp')) {
            return @imagewebp($image, $target, $this->quality);
        }

        return false;
    }

    protected function mimeToType(?string $mime): ?string
    {
        return match ($mime) {
            'image/jpeg', 'image/jpg' => 'jpeg',
            'image/png' => 'png',
            'image/gif' => 'gif',
            'image/webp' => 'webp',
            'image/avif' => 'avif',
            default => null,
        };
    }
}
