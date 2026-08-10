<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Cache;

class SiteSetting extends Model
{
    use HasFactory;

    protected $fillable = [
        'email',
        'whatsapp',
        'whatsapp_display',
        'address',
        'maps_url',
    ];

    public static function current(): self
    {
        return Cache::remember('site_settings', 3600, function () {
            return static::query()->firstOrCreate(['id' => 1]);
        });
    }

    public static function get($key, $default = null)
    {
        return static::current()->{$key} ?? $default;
    }

    public static function flushCache(): void
    {
        Cache::forget('site_settings');
    }

    protected static function booted(): void
    {
        static::saved(fn () => static::flushCache());
    }
}
