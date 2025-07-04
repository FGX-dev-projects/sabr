<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'content',
        'article_date',
        'small_image',
        'is_active',
        'slug'
    ];

    protected $casts = [
        'article_date' => 'datetime'
    ];

    // Scope to only get active articles
    public function scopeActive($query)
    {
        return $query->where('is_active', 1);
    }

    // Generate URL-friendly slug if needed
    public function getRouteKeyName()
    {
        return 'slug';
    }
}