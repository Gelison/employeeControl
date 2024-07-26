<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
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
    protected $hidden = [
        'updated_at'
    ];

    public function division(): BelongsTo
    {
        return $this->belongsTo(Division::class);
    }

    public function position(): BelongsTo
    {
        return $this->belongsTo(Position::class);
    }
}
