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
        $datas = $request->data;

        foreach ($datas as $data) {
            $validator = Validator::make($data, [
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

            ExerciseDetail::create([
                'exercise_id' => $data['exercise_id'],
                'duration' => $data['duration'],
                'position' => $data['position'],
                'vout' => $data['vout'],
                'dorsimax' => $data['dorsimax'],
                'plantarmax' => $data['plantarmax'],
                'rom' => $data['rom'],
                'percentage' => $data['percentage'],
                'step_amount' => $data['step_amount'],
                'step_duration' => $data['step_duration'],
                'step_per_second' => $data['step_per_second'],
            ]);
        }

        return new ExerciseDetailResource(true, 'Exercise details data added successfully', $datas);
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
