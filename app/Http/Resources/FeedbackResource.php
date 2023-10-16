<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class FeedbackResource extends JsonResource
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
            'image' => asset('storage/' . $this->image),
            'company_name' => $this->company_name,
            'company_logo' => asset('storage/' . $this->company_logo),
            'content' => $this->content,
        ];
    }
}
