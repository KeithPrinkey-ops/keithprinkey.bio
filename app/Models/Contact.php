<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Laravel\Jetstream\InteractsWithBanner;
use Spatie\Permission\Traits\HasRoles;

class Contact extends Model
{
    use HasFactory, SoftDeletes, HasRoles, InteractsWithBanner;

    protected $fillable = [
        'first_name',
        'last_name',
        'company',
        'email',
        'subject',
        'message',
    ];

    protected $casts = [
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
        'deleted_at' => 'datetime',
    ];

    public function getFullNameAttribute(): string
    {
        return "{$this->first_name}  {$this->last_name}";
    }

    protected function serializeDate(\DateTimeInterface $date): string
    {
        return $date->format('Y-m-d H:i:s');
    }

}
