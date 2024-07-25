<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
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




    // public function position(): HasOne
    // {
    //     return $this->hasOne(Position::class);
    // }
}
