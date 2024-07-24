<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Carbon\Carbon;

use Illuminate\Http\Resources\Json\JsonResource;

class LevelResource extends JsonResource
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

            'created' => Carbon::parse($this->created_at)->format('Y-m-d'),
            'updated' => Carbon::parse($this->updated_at)->format('Y-m-d'),
        ];    }
}
