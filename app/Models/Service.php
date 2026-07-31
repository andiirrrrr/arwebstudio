<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'category',
        'description',
        'target_audience',
        'key_features',
        'workflow',
        'price_start',
        'thumbnail',
    ];

    protected $casts = [
        'key_features' => 'array',
        'workflow' => 'array',
    ];

    // ===== RELASI =====
    public function servicePrices()
    {
        return $this->hasMany(ServicePrice::class);
    }

    public function packages()
    {
        return $this->belongsToMany(Package::class, 'service_prices');
    }

    public function getPackagesCountAttribute()
    {
        return $this->servicePrices()->count();
    }

    public function getThumbnailUrlAttribute()
    {
        if ($this->thumbnail) {
            return asset('storage/' . $this->thumbnail);
        }
        return null;
    }

    // ===== ATRIBUT DINAMIS =====
    public function getStartingPriceAttribute()
    {
        // 1. Cari harga minimum dari service_prices
        $minPrice = $this->servicePrices()->min('price');
        if ($minPrice !== null) {
            return $minPrice;
        }
        
        // 2. Jika tidak ada, gunakan price_start dari tabel services
        if ($this->price_start) {
            // Bersihkan dari 'Rp', titik, koma, dll
            $clean = preg_replace('/[^0-9]/', '', $this->price_start);
            if ($clean) {
                return (float) $clean;
            }
        }
        
        // 3. Jika keduanya kosong, return null
        return null;
    }

    public function getFormattedStartingPriceAttribute()
    {
        $price = $this->starting_price;
        if ($price !== null) {
            return 'Rp ' . number_format($price, 0, ',', '.');
        }
        return 'Hubungi Kami';
    }
}