<?php

namespace App\Http\Resources;

use App\Models\Page;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

/** @mixin Page */
class PageResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'subtitle' => $this->subtitle,
            'summary' => $this->summary,
            'meta_description' => $this->meta_description,
            'og_image_path' => $this->og_image_path,
            'route_name' => $this->route_name,
            'external_url' => $this->external_url,
            'tech_stack' => $this->tech_stack,
            'features' => $this->features,
            'screenshots' => $this->screenshots,
            'faqs' => $this->faqs,
            'order_column' => $this->order_column,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }
}
