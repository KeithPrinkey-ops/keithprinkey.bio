<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Str;

class ServiceCategory extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'name',
        'slug',
    ];

    public function fill(array $attributes = []): static
    {
        if (isset($attributes['name']) && !isset($attributes['slug'])) {
            $attributes['slug'] = Str::slug($attributes['name']);
        }
        return parent::fill($attributes);
    }



    public function services(): HasMany
    {
        return $this->hasMany(Services::class, 'category');
    }

}
