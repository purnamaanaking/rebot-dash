<?php

use App\Http\Controllers\ExerciseDetailController;
use App\Http\Controllers\ExerciseController;
use App\Http\Controllers\TestController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return redirect('/login');
});

Route::get('/login', function(){
    return view('login');
})->name('login');

Route::get('/exercises', [ExerciseController::class, 'index'])->name('exercises.index');
Route::delete('/exercises/{exercise}', [ExerciseController::class, 'destroy'])->name('exercises.destroy');

Route::get('/exercise-details/{exerciseId}', [ExerciseDetailController::class, 'show'])->name('exerciseDetails.show');
