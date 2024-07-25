<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

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
     'created'   ,
     
    ];
    // public function division(): HasOne
    // {
    //     return $this->hasOne(Division::class);
    // }

    // public function position(): HasOne
    // {
    //     return $this->hasOne(Position::class);
    // }
}
