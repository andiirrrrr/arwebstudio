<?php

namespace App\Console\Commands;

use App\Models\Article;
use App\Models\Project;
use App\Models\Service;
use App\Support\ImageOptimizer;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Storage;

class OptimizeImages extends Command
{
    protected $signature = 'images:optimize';

    protected $description = 'Kompresi semua gambar di public storage menjadi WebP/AVIF dan sinkronkan path di database';

    public function handle(ImageOptimizer $optimizer): int
    {
        $disk = Storage::disk('public');

        $imageFiles = array_values(array_filter($disk->allFiles(), function (string $file) {
            return (bool) preg_match('/\.(jpe?g|png|gif|webp|avif)$/i', $file);
        }));

        $this->line(sprintf('Ditemukan %d file gambar di public storage.', count($imageFiles)));

        $map = [];
        $savedBytes = 0;

        $progress = $this->output->createProgressBar(count($imageFiles));
        $progress->start();

        foreach ($imageFiles as $file) {
            $before = $disk->size($file);
            $newPath = $optimizer->optimize('public', $file);

            if ($newPath !== null && $newPath !== $file) {
                $map[$file] = $newPath;
                $savedBytes += max(0, $before - ($disk->exists($newPath) ? $disk->size($newPath) : 0));
            }

            $progress->advance();
        }

        $progress->finish();
        $this->newLine(2);

        if (empty($map)) {
            $this->info('Tidak ada gambar yang perlu dioptimasi.');

            return self::SUCCESS;
        }

        $this->line(sprintf('Mengoptimasi %d file...', count($map)));

        foreach (Project::all(['id', 'thumbnail_url']) as $project) {
            if (isset($map[$project->thumbnail_url])) {
                $project->update(['thumbnail_url' => $map[$project->thumbnail_url]]);
            }
        }

        foreach (Service::all(['id', 'thumbnail']) as $service) {
            if (isset($map[$service->thumbnail])) {
                $service->update(['thumbnail' => $map[$service->thumbnail]]);
            }
        }

        foreach (Article::all(['id', 'thumbnail', 'content']) as $article) {
            $attributes = [];

            if (isset($map[$article->thumbnail])) {
                $attributes['thumbnail'] = $map[$article->thumbnail];
            }

            if ($article->content) {
                $content = str_replace(array_keys($map), array_values($map), $article->content);

                if ($content !== $article->content) {
                    $attributes['content'] = $content;
                }
            }

            if (! empty($attributes)) {
                $article->update($attributes);
            }
        }

        $rows = array_map(
            fn ($old, $new) => [$old, $new],
            array_keys($map),
            array_values($map)
        );

        $this->table(['File lama', 'File baru (WebP)'], $rows);
        $this->info(sprintf('Selesai! %d file dikompresi, hemat ± %s.', count($map), $this->humanBytes($savedBytes)));

        return self::SUCCESS;
    }

    protected function humanBytes(int $bytes): string
    {
        if ($bytes >= 1048576) {
            return sprintf('%.2f MB', $bytes / 1048576);
        }

        if ($bytes >= 1024) {
            return sprintf('%.1f KB', $bytes / 1024);
        }

        return $bytes . ' B';
    }
}
