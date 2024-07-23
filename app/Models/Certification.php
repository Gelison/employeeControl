<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Certification extends Model
{
    protected $fillable = [
        'information_id',
        'date',
        'record_number',
        'division_id',
        'position_id',
        'recomendetion'
    ];

    use HasFactory;
}
