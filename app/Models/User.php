<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;




    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
        "email_verified_at",
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];



    
    // public function hasAnyRole($roles)
    // {
    //     if (!is_array($roles)) {
    //         $roles = [$roles];
    //     }

    //     foreach ($roles as $role) {
    //         if (strtolower($role) === strtolower($this->roleInfo->role->name)) {
    //             return true;
    //         }
    //     }

    //     return false;
    // }

    public function information(): HasOne
    {
        return $this->hasOne(Information::class);
    }

    public function roleInfo(): HasOne
    {
        return $this->hasOne(RoleInfo::class)->withDefault([
            'role_id' => '2',
        ]);
    }
}
