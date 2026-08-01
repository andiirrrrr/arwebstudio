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

    // Accessor untuk URL publik yang diformat (digunakan di frontend Blade)
    public function getFormattedThumbnailUrlAttribute()
    {
        if ($this->thumbnail_url) {
            if (str_starts_with($this->thumbnail_url, 'http://') || str_starts_with($this->thumbnail_url, 'https://')) {
                return $this->thumbnail_url;
            }
            return asset('storage/' . $this->thumbnail_url);
        }
        return null;
    }
}