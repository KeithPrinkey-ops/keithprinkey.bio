<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\Post;

class Category extends Model
{
    use HasFactory;

    // add the color_class attribute
    protected $attributes = [
        'color_class' => 'red', // Default color class
    ];
    protected $fillable = [
        'name',
        'slug',
        'description',
        'color_class',
    ];

    /**
     * A category has many posts.
     */
    public function posts()
    {
        return $this->hasMany(Post::class);
    }

}
