<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class PizzaResource extends JsonResource
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
            'selling_price' => $this->ingredients->sum('cost_price') * 1.5,
            'ingredients' => IngredientResource::collection($this->ingredients),
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }
}
