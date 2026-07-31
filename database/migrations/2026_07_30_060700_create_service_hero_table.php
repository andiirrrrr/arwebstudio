<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('service_hero', function (Blueprint $table) {
            $table->id();
            $table->string('title')->default('Rekayasa Untuk Skala Eksponensial.');
            $table->string('subtitle')->nullable()->comment('Subtitle di bawah title');
            $table->string('badge_text')->default('Layanan Utama');
            $table->string('uptime_text')->default('99.9%');
            $table->string('uptime_label')->default('Uptime Guarantee');
            $table->text('hero_image')->nullable()->comment('Path ke gambar hero');
            $table->text('hero_description')->nullable()->comment('Deskripsi teknologi tanpa kompromi');
            $table->string('tech_stack_fast')->default('Next.js & React');
            $table->string('tech_stack_secure')->default('SSL & Auth0');
            $table->string('cta_title')->default('Siap Untuk Meningkatkan Skala Bisnis Anda?');
            $table->text('cta_description')->nullable()->comment('Deskripsi CTA');
            $table->string('cta_primary_btn')->default('Mulai Proyek Sekarang');
            $table->string('cta_secondary_btn')->default('Lihat Portfolio Kami');
            $table->text('hero_image_2')->nullable()->comment('Gambar server hardware');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('service_hero');
    }
};
