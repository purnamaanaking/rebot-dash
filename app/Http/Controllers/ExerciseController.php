<?php

namespace App\Http\Controllers;

use App\Models\Exercise;
use App\Models\ExerciseDetail;
use Illuminate\Http\Request;

class ExerciseController extends Controller
{
    public function index()
    {
        $exercises = Exercise::all()->sortDesc();

        return view('exercises', compact('exercises'));
    }

    public function destroy(string $id)
    {
        ExerciseDetail::where('exercise_id', $id)->delete();
        Exercise::find($id)->delete();

        return redirect()->route('exercises.index');
    }
}
