<?php

use App\Http\Controllers\CoachController;
use Illuminate\Support\Facades\Route;

Route::post('/getCoaches', [CoachController::class, 'get']);
Route::post('/getSingleCoach', [CoachController::class, 'getSingleCoach']);
