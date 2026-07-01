<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use App\Http\Resources\CvSectionResource;

class CvResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'email' => $this->email,
            'phone' => $this->phone,
            'country_id' => $this->country_id,
            'state_id' => $this->state_id,
            'city_id' => $this->city_id,
            'linkedin' => $this->linkedin,
            'github' => $this->github,
            'summary' => $this->summary,
            'sections' => CvSectionResource::collection($this->whenLoaded('sections'))
        ];
    }
}
