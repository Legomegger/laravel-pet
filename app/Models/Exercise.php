<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Exercise extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'equipment_id',
        'body_part_id',
        'equipment_weight',
        'repetitions',
        'sets',
        'workout_id',
    ];

    public function equipment() : HasOne
    {
        return $this->hasOne(Equipment::class);
    }

    public function bodyPart() : BelongsTo
    {
        return $this->belongsTo(Bodypart::class);
    }

    public function workout() : BelongsTo
    {
        return $this->belongsTo(Workout::class);
    }
}
