<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Education extends Model
{
    use HasFactory;

    protected $fillable = [
        'information_id',
        'date',
        'doctype_id',
        'number',
        'level_id',
        'qualification',
        'speciality',
        'rank',
        'education_form',
        'institution'

    ];
    protected $hidden = [
        'updated_at'
    ];
    public function doctype(): BelongsTo
    {
        return $this->belongsTo(Doctype::class);
    }

    public function level(): BelongsTo
    {
        return $this->belongsTo(Level::class);
    }
}
