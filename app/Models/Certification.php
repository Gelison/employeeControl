<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Certification extends Model
{
    use HasFactory;

    protected $fillable = [
        'information_id',
        'date',
        'record_number',
        'division_id',
        'position_id',
        'recomendetion'
    ];

    public function division(): HasOne
    {
        return $this->hasOne(Division::class);
    }

    public function position(): HasOne
    {
        return $this->hasOne(Position::class);
    }
}
