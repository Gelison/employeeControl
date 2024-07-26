<?php

namespace App\Http\Resources;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class CertificationResource extends JsonResource
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
            'record_number' => $this->record_number,
            
            'division' => $this->division_id,
            'divisionName' => $this->division->name,

            'position' => $this->position_id,
            'positionName' => $this->position->name,

            'recomendetion' => $this->recomendetion,




            'created' => Carbon::parse($this->created_at)->format('Y-m-d'),
            // 'updated' => Carbon::parse($this->updated_at)->format('Y-m-d'),
        ];
    }
}
