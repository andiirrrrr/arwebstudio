<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        // Drop foreign key constraints jika ada (opsional)
        // Tapi karena kita drop tabel, Laravel akan otomatis menangani jika foreign key tidak ada
        Schema::dropIfExists('pricing_variants');
        Schema::dropIfExists('pricing_tiers');
    }

    public function down(): void
    {
        // Tidak perlu rollback karena kita tidak mau membuat ulang tabel lama
    }
};