<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ExerciseDetail extends Model
{
    use HasFactory;

    protected $fillable = [
        'exercise_id',
        'duration',
        'position',
        'vout',
        'dorsimax',
        'plantarmax',
        'rom',
        'percentage',
        'step_amount',
        'step_duration',
        'step_per_second',
    ];

    public function exercise()
    {
        return $this->belongsTo(Exercise::class);
    }
}
