<?php

namespace App\Models;

use App\Support\ImageOptimizer;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Article extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'slug',
        'category',
        'thumbnail',
        'content',
        'author',
        'is_published',
        'published_at',
        'views',
    ];

    protected $casts = [
        'is_published' => 'boolean',
        'published_at' => 'datetime',
    ];

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($article) {
            if (empty($article->slug)) {
                $article->slug = Str::slug($article->title);
            }
        });

        static::saving(function (Article $article) {
            if ($article->isDirty('thumbnail') && ! empty($article->thumbnail)) {
                $newPath = ImageOptimizer::make()->optimize('public', $article->thumbnail);

                if ($newPath !== null && $newPath !== $article->thumbnail) {
                    $article->thumbnail = $newPath;
                }
            }

            if ($article->isDirty('content') && ! empty($article->content)) {
                $article->content = ImageOptimizer::make()->optimizeHtml($article->content);
            }
        });
    }

    // ===== ACCESSOR UNTUK THUMBNAIL =====
    public function getThumbnailUrlAttribute()
    {
        if ($this->thumbnail) {
            return asset('storage/' . $this->thumbnail);
        }
        return null;
    }

    public function getExcerptAttribute()
    {
        return Str::limit(strip_tags($this->content), 120);
    }

    public function getReadingTimeAttribute()
    {
        $wordCount = str_word_count(strip_tags($this->content));
        $minutes = ceil($wordCount / 200);
        return $minutes . ' min read';
    }

    public function getFormattedDateAttribute()
    {
        return $this->published_at ? $this->published_at->format('d M Y') : '-';
    }
}