<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Str;
use Livewire\Attribute;

class Services extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
    'name',
    'slug',
    'description',
    'icon',
    'category',
    'features',
    'price_range',
    'service_focus',
    'project_type',
    'current_stack',
    'company_size',
    'industry',
    'primary_goals',
    'scope_details',
    'integrations',
    'compliance_requirements',
    'pain_points',
    'billing_model',
    'decision_timeline',
    'launch_deadline',
    'internal_team',
    'primary_contact_role',
    'success_metrics',
    'existing_assets',
    'constraints',
    'active',
];

    protected $appends = [
        'icon_url',
    ];

protected function casts(): array
{
    return [
        'features' => 'array',
        'service_focus' => 'array',
        'active' => 'boolean',
    ];
}
    public function fill(array $attributes = []): static
    {
        if (isset($attributes['name']) && !isset($attributes['slug'])) {
            $attributes['slug'] = Str::slug($attributes['name']);
        }
        return parent::fill($attributes);
    }

    public function category(): BelongsTo
    {
        return $this->belongsTo(ServiceCategory::class, 'category', 'name');
    }

    public function categoryModel(): BelongsTo
    {
        // local column is `category` (stores category name), owner key is `name`
        return $this->belongsTo(ServiceCategory::class, 'category', 'name');
    }

}
