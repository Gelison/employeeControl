<?php

namespace App\Http\Resources;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class UserResource extends JsonResource
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
            'informationId' => $this->information->id,
            'roleId' => $this->roleInfo->role->name,

            'created' => Carbon::parse($this->created_at)->format('Y-m-d'),
            'updated' => Carbon::parse($this->updated_at)->format('Y-m-d'),
        ];
    }
}
