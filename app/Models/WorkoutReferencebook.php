<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class WorkoutReferencebook extends Model
{
    use HasFactory;

    protected $fillable = [
        'title'
    ];

    public function workouts() : HasMany
    {
        return $this->hasMany(Workout::class, 'workout_type_id');
    }
}
