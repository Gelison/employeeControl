<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Information extends Model
{
    use HasFactory;

    protected $fillable = ['user_id'];


    public function user(): BelongsTo{
        return $this ->belongsTo(User::class);
    }


    public function education(): HasMany
    {
        return $this->hasMany(Education::class);
    }

    public function substitutions(): HasMany
    {
        return $this->hasMany(Substitution::class);
    }

    public function transfers(): HasMany
    {
        return $this->hasMany(Transfer::class);
    }

    public function certifications(): HasMany
    {
        return $this->hasMany(Certification::class);
    }

}
