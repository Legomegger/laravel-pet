<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Computer extends Model
{
    use HasFactory;

    protected $fillable = [
        'processor_title',
        'processor_speed',
        'ram_type',
        'ram_speed',
        'gpu_title',
        'gpu_speed',
        'secondary_memory_size',
        'user_id',
    ];

    public function user() : BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
