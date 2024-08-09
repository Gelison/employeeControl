<?php

namespace App\Http\Resources;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class InformationResource extends JsonResource
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
            'userId' => $this->user_id,
            'userName' => $this->user->name,

            'education' => EducationResource::collection($this->education)->whenLoaded('education'),
            'substitutions' => SubstitutionResource::collection($this->substitutions)->whenLoaded('substitutions'),
            'transfers' => TransferResource::collection($this->transfers)->whenLoaded('transfers'),
            'certifications' => CertificationResource::collection($this->certifications)->whenLoaded('certifications'),

        ];
    }
}
