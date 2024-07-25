<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Position extends Model
{
    use HasFactory;

    protected $fillable = ['name'];
    protected $hidden = [
        'created_at',
        'updated_at'
    ];

    public function transfer(): BelongsTo
    {
        return $this->belongsTo(Transfer::class);
    }

    public function substitution(): BelongsTo
    {
        return $this->belongsTo(Substitution::class);
    }
    public function certification(): BelongsTo
    {
        return $this->belongsTo(Certification::class);
    }
}
