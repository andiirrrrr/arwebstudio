<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Format Kompresi Gambar
    |--------------------------------------------------------------------------
    |
    | Format output setelah gambar dioptimasi. Mendukung "webp" (direkomendasikan)
    | dan "avif" (memerlukan dukungan libavif di server).
    |
    */

    'format' => env('IMAGE_FORMAT', 'webp'),

    /*
    |--------------------------------------------------------------------------
    | Kualitas Encoding
    |--------------------------------------------------------------------------
    |
    | Kualitas output WebP/AVIF (0 - 100). 80 adalah keseimbangan terbaik
    | antara ukuran file dan kualitas visual.
    |
    */

    'quality' => (int) env('IMAGE_QUALITY', 80),

    /*
    |--------------------------------------------------------------------------
    | Batas Dimensi Maksimal
    |--------------------------------------------------------------------------
    |
    | Gambar yang lebih lebar/tinggi dari nilai ini akan di-resize agar muat
    | dalam kotak persegi dengan sisi selebar nilai ini (mempertahankan rasio).
    | 0 = tidak di-resize.
    |
    */

    'max_dimension' => (int) env('IMAGE_MAX_DIMENSION', 1920),

    /*
    |--------------------------------------------------------------------------
    | Hapus File Asli
    |--------------------------------------------------------------------------
    |
    | Jika true, file asli (JPG/PNG/GIF) dihapus setelah berhasil dikonversi
    | ke format baru. Hemat ruang penyimpanan maksimal.
    |
    */

    'strip_original' => (bool) env('IMAGE_STRIP_ORIGINAL', true),

];
