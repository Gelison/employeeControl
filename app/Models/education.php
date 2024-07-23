<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Education extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'information_id',
        'date',
        'dictype_id',
        'number',
        'level_id',
        'qualification',
        'speciality',
        'rank',
        'education_form',
        'institution'
    ];
}
