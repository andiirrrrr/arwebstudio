<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CustomAppOffering extends Model
{
    use HasFactory;

    protected $fillable = [
        'price_start',
        'description',
        'example_use_cases',
    ];

    protected $casts = [
        'example_use_cases' => 'array',
    ];
}