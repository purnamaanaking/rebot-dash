<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Exercise extends Model
{
    use HasFactory;

    protected $fillable = ['code', 'start_time', 'end_time'];

    public function exerciseDetails()
    {
        return $this->hasMany(ExerciseDetail::class);
    }
}
