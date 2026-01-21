<?php

namespace App\Http\Resources;

use App\Models\Leads;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

/** @mixin Leads */
class LeadsResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'email' => $this->email,
            'company' => $this->company,
            'project_type' => $this->project_type,
            'budget_range' => $this->budget_range,
            'decision_timeline' => $this->decision_timeline,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }
}
