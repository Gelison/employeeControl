<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Transfer extends Model
{
    use HasFactory;

    protected $fillable = [
        'information_id',
        'date',
        'transfers_occasion',
        'division_id',
        'etc_persent',
        'contract_persent',
        'contract_beginning',
        'contract_ending',
        'position_id',
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
