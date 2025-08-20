<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Page extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'name',
        'subtitle',
        'summary',
        'meta_description',
        'og_image_path',
        'route_name',
        'external_url',
        'tech_stack',
        'features',
        'screenshots',
        'faqs',
        'order_column',
    ];

    protected function casts(): array
    {
        return [
            'tech_stack' => 'array',
            'features' => 'array',
            'screenshots' => 'array',
            'faqs' => 'array',
        ];
    }
}
