<?php

namespace App\Http\Controllers;

use App\Models\Exercise;
use App\Models\ExerciseDetail;
use Carbon\Carbon;
use Carbon\CarbonInterval;
use Illuminate\Http\Request;

class ExerciseDetailController extends Controller
{
    public function show($exerciseId)
    {
        $exerciseDetails = ExerciseDetail::where('exercise_id', $exerciseId)
            ->orderBy('id', 'asc')
            ->get();

        if (count($exerciseDetails) !== 0) {
            $latestData = $exerciseDetails->last();
            $pData = array();
            $voutData = array();
            $label = array();

            foreach ($exerciseDetails as $exerciseDetail) {
                array_push($pData, $exerciseDetail->position);
                array_push($voutData, $exerciseDetail->vout);
                array_push($label, '');
            }

            $data = [
                'latest' => [
                    'duration' => CarbonInterval::seconds($latestData->duration)->cascade()->forHumans(),
                    'dorsimax' => $latestData->dorsimax,
                    'plantarmax' => $latestData->plantarmax,
                    'rom' => $latestData->rom,
                    'percentage' => $latestData->percentage,
                    'step_amount' => $latestData->step_amount,
                    'step_duration' => $latestData->step_duration,
                    'step_per_second' => $latestData->step_per_second,
                ],
                'p_data' => $pData,
                'vout_data' => $voutData,
                'label' => $label,
                'exercise' => $latestData->exercise
            ];
        }
        else {
            $exercise = Exercise::find($exerciseId);
            $data = [
                'latest' => [],
                'p_data' => [],
                'vout_data' => [],
                'label' => [],
                'exercise' => $exercise
            ];
        }

        return view('exercise_details', compact('data'));
    }
}
