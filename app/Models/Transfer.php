<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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
}
