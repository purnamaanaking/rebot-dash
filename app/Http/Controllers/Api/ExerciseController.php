<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\ExerciseResource;
use App\Models\Exercise;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ExerciseController extends Controller
{
    public function index()
    {
        $exercises = Exercise::all();

        return new ExerciseResource(true, 'List Data Exercises', $exercises);
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'code' => 'required',
            'start_time' => 'date_format:Y-m-d H:i:s',
            'end_time' => 'date_format:Y-m-d H:i:s',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }

        $exercise = Exercise::create([
            'code' => $request->code,
            'start_time' => $request->start_time,
            'end_time' => $request->end_time,
        ]);

        return new ExerciseResource(true, 'Exercise Data Added Successfully', $exercise);
    }

    public function show(string $id)
    {
        //
    }

    public function update(Request $request, Exercise $exercise)
    {
        $validator = Validator::make($request->all(), [
            'code' => 'required',
            'start_time' => 'date_format:Y-m-d H:i:s',
            'end_time' => 'date_format:Y-m-d H:i:s',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }

        if ($request->code) $exercise->code = $request->code;
        if ($request->start_time) $exercise->start_time = $request->start_time;
        if ($request->end_time) $exercise->end_time = $request->end_time;

        $exercise->save();

        return new ExerciseResource(true, 'Exercise Data Updated Successfully', $exercise);
    }

    public function destroy(string $id)
    {
        //
    }
}
