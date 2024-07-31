<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class RoleInfo extends Model
{
    use HasFactory;
    

    protected $fillable = ['user_id', 'role_id'];

    protected $hidden = [
        'created_at',
        'updated_at'
    ];
    public function role(): BelongsTo
    {
        return $this->belongsTo(Role::class);
    }
    
}

