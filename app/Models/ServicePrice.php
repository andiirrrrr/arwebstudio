<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServicePrice extends Model
{
    use HasFactory;

    protected $fillable = [
        'service_id',
        'package_id',
        'price',
        'estimated_days',
        'page_limit',
        'revision_limit',
        'hosting',
        'domain',
        'is_featured',
        'is_active',
        'features',
    ];

    protected $casts = [
        'price' => 'integer',
        'hosting' => 'boolean',
        'domain' => 'boolean',
        'is_featured' => 'boolean',
        'is_active' => 'boolean',
        'estimated_days' => 'integer',
        'page_limit' => 'integer',
        'revision_limit' => 'integer',
        'features' => 'array',
    ];

    public function service()
    {
        return $this->belongsTo(Service::class);
    }

    public function package()
    {
        return $this->belongsTo(Package::class);
    }
}