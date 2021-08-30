<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Workout extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'time_length',
        'place',
        'current_user_weight',
        'calories_burnt',
        'workout_type_id',
        'user_id'
    ];

    public function user() : BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function exercises() : HasMany
    {
        return $this->hasMany(Exercise::class);
    }

    public function type() : BelongsTo
    {
        return $this->belongsTo(WorkoutReferencebook::class, 'workout_type_id');
    }
}
