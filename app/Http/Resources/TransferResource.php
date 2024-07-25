<?php

namespace App\Http\Resources;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class TransferResource extends JsonResource
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
            'transfers_occasion' => $this->transfers_occasion,

            'divisionId' => $this->division_id,
            'etc_persent' => $this->etc_persent,
            'contract_persent' => $this->contract_persent,
            'contract_beginning' => $this->contract_beginning,
            'contract_ending' => $this->contract_ending,
            'positionId' => $this->position_id,


            'created' => Carbon::parse($this->created_at)->format('Y-m-d'),
            // 'updated' => Carbon::parse($this->updated_at)->format('Y-m-d'),
        ];
    }
}
