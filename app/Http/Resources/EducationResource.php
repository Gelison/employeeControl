<?php

namespace App\Http\Resources;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class EducationResource extends JsonResource
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
            'doctypeId' => $this->doctype_id,
            'number' => $this->number,
            'levelId' => $this->level_id,
            'qualification' => $this->qualification,
            'speciality' => $this->speciality,
            'rank' => $this->rank,
            'education_form' => $this->education_form,
            'institution' => $this->institution,

            'created' => Carbon::parse($this->created_at)->format('Y-m-d'),
            // 'updated' => Carbon::parse($this->updated_at)->format('Y-m-d'),
        ];
    }
}
