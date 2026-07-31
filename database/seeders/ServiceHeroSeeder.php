<?php

namespace Database\Seeders;

use App\Models\ServiceHero;
use Illuminate\Database\Seeder;

class ServiceHeroSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ServiceHero::create([
            'title' => 'Rekayasa Untuk Skala Eksponensial.',
            'subtitle' => null,
            'badge_text' => 'Layanan Utama',
            'uptime_text' => '99.9%',
            'uptime_label' => 'Uptime Guarantee',
            'hero_description' => 'Kami tidak hanya membangun website; kami merekayasa infrastruktur digital yang siap menghadapi lonjakan traffic seketika. Menggunakan tech-stack modern untuk menjamin kecepatan, keamanan, dan skalabilitas.',
            'tech_stack_fast' => 'Next.js & React',
            'tech_stack_secure' => 'SSL & Auth0',
            'cta_title' => 'Siap Untuk Meningkatkan Skala Bisnis Anda?',
            'cta_description' => 'Dapatkan konsultasi gratis selama 30 menit dengan tim engineering kami untuk membahas roadmap digital Anda.',
            'cta_primary_btn' => 'Mulai Proyek Sekarang',
            'cta_secondary_btn' => 'Lihat Portfolio Kami',
            'hero_image' => null,
            'hero_image_2' => null,
        ]);
    }
}
