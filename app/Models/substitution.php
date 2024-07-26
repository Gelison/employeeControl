<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Substitution extends Model
{
    use HasFactory;

    protected $fillable = [
        'information_id',
        'date',
        'order_number',
        'substitutions_occasion',
        'position_id'
    ];
    protected $hidden = [
        'updated_at'
    ];



    public function position(): BelongsTo
    {
        return $this->belongsTo(Position::class);
    }
}
