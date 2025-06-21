<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Storage;


class Post extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'user_id',
        'category_id',
        'title',
        'slug',
        'excerpt',
        'body',
        'hero_image_path',
        'thumb_image_path',
        'views',
    ];

    protected $appends = [
        'hero_image_url',
        'thumb_image_url',
    ];


    /**
     * Who wrote this post?
     */
    public function author()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    /**
     * What category does this belong to?
     */
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function getHeroImageUrlAttribute()
    {
        return $this->hero_image_path
            ? Storage::disk('public')->url($this->hero_image_path)
            : null;
    }

    public function getThumbImageUrlAttribute()
    {
        return $this->thumb_image_path
            ? \Illuminate\Support\Facades\Storage::disk('public')->url($this->thumb_image_path)
            : null;
    }
    /**
     * Ensure 'views' is always an integer.
     */
    protected $casts = [
        'views' => 'integer',
    ];

    public function getRouteKeyName()
    {
        return 'slug';
    }

}
