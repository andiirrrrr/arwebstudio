<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServiceHero extends Model
{
    use HasFactory;

    protected $table = 'service_hero';

    protected $fillable = [
        'title',
        'subtitle',
        'badge_text',
        'uptime_text',
        'uptime_label',
        'hero_image',
        'hero_description',
        'tech_stack_fast',
        'tech_stack_secure',
        'cta_title',
        'cta_description',
        'cta_primary_btn',
        'cta_secondary_btn',
        'hero_image_2',
    ];

    public static function getHeroData()
    {
        $data = self::first();
        
        if (!$data) {
            // Return default values if no record exists
            return [
                'title' => 'Rekayasa Untuk Skala Eksponensial.',
                'subtitle' => null,
                'badge_text' => 'Layanan Utama',
                'uptime_text' => '99.9%',
                'uptime_label' => 'Uptime Guarantee',
                'hero_image' => null,
                'hero_description' => 'Kami tidak hanya membangun website; kami merekayasa infrastruktur digital yang siap menghadapi lonjakan traffic seketika. Menggunakan tech-stack modern untuk menjamin kecepatan, keamanan, dan skalabilitas.',
                'tech_stack_fast' => 'Next.js & React',
                'tech_stack_secure' => 'SSL & Auth0',
                'cta_title' => 'Siap Untuk Meningkatkan Skala Bisnis Anda?',
                'cta_description' => 'Dapatkan konsultasi gratis selama 30 menit dengan tim engineering kami untuk membahas roadmap digital Anda.',
                'cta_primary_btn' => 'Mulai Proyek Sekarang',
                'cta_secondary_btn' => 'Lihat Portfolio Kami',
                'hero_image_2' => null,
            ];
        }
        
        return [
            'title' => $data->title,
            'subtitle' => $data->subtitle,
            'badge_text' => $data->badge_text,
            'uptime_text' => $data->uptime_text,
            'uptime_label' => $data->uptime_label,
            'hero_image' => $data->hero_image,
            'hero_description' => $data->hero_description,
            'tech_stack_fast' => $data->tech_stack_fast,
            'tech_stack_secure' => $data->tech_stack_secure,
            'cta_title' => $data->cta_title,
            'cta_description' => $data->cta_description,
            'cta_primary_btn' => $data->cta_primary_btn,
            'cta_secondary_btn' => $data->cta_secondary_btn,
            'hero_image_2' => $data->hero_image_2,
        ];
    }
}
