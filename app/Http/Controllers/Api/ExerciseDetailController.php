<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\ExerciseDetailResource;
use App\Models\ExerciseDetail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ExerciseDetailController extends Controller
{
    public function index()
    {
        $exerciseDetails = ExerciseDetail::all();

        return new ExerciseDetailResource(true, 'List Data Exercise Details', $exerciseDetails);
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'exercise_id' => 'required',
            'duration' => 'required',
            'position' => 'required',
            'vout' => 'required',
            'dorsimax' => 'required',
            'plantarmax' => 'required',
            'rom' => 'required',
            'percentage' => 'required',
            'step_amount' => 'required',
            'step_duration' => 'required',
            'step_per_second' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }

        $exerciseDetail = ExerciseDetail::create([
            'exercise_id' => $request->exercise_id,
            'duration' => $request->duration,
            'position' => $request->position,
            'vout' => $request->vout,
            'dorsimax' => $request->dorsimax,
            'plantarmax' => $request->plantarmax,
            'rom' => $request->rom,
            'percentage' => $request->percentage,
            'step_amount' => $request->step_amount,
            'step_duration' => $request->step_duration,
            'step_per_second' => $request->step_per_second,
        ]);

        return new ExerciseDetailResource(true, 'Exercise details data added successfully', $exerciseDetail);
    }

    public function show(string $id)
    {
        //
    }

    public function update(Request $request, string $id)
    {
        //
    }

    public function destroy(string $id)
    {
        //
    }
}
