<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Laravel\Jetstream\InteractsWithBanner;

class Leads extends Model
{
    use HasFactory, SoftDeletes, InteractsWithBanner;

    protected $fillable = [
        'name',
        'email',
        'company',
        'project_type',
        'budget_range',
        'decision_timeline',
    ];


}
