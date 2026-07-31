<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'client_name',
        'category',
        'thumbnail_url',
        'description',
        'problem',
        'solution',
        'result',
        'project_url',
    ];

    // Tambahkan accessor untuk URL gambar
    public function getThumbnailUrlAttribute($value)
    {
        if ($value) {
            return asset('storage/' . $value);
        }
        return null;
    }
}