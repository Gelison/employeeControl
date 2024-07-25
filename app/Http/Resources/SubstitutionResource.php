<?php

namespace App\Http\Resources;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class SubstitutionResource extends JsonResource
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
            'informationId' => $this->information_id,
            'date' => $this->date,
            'order_number' => $this->order_number,
            'substitutions_occasion' => $this->substitutions_occasion,
            'positionId' => $this->position_id,


            'created' => Carbon::parse($this->created_at)->format('Y-m-d'),
            'updated' => Carbon::parse($this->updated_at)->format('Y-m-d'),
        ];
    }
}
