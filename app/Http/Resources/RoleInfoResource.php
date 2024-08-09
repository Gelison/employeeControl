<?php

namespace App\Http\Resources;

use App\Models\Role;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class RoleInfoResource extends JsonResource
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

            'roleId' => $this->role_id,
            'roleName' => $this->role->name,
        ];
    }
}
