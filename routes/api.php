<?php

use App\Http\Controllers\Api\ExperienceController;
use App\Http\Controllers\Api\ProjectController;
use App\Http\Controllers\Api\TechnologyController;
use App\Http\Controllers\Api\TrainingController;
use App\Http\Controllers\Api\UserController;
use Illuminate\Support\Facades\Route;


Route::apiResource('/projects', ProjectController::class)
    ->only(['index', 'show'])
    ->parameters(['projects', 'project']);

Route::apiResource('/experiences', ExperienceController::class)
    ->only(['index', 'show'])
    ->parameters(['experiences', 'experience']);

Route::apiResource('/technologies', TechnologyController::class)
    ->only(['index', 'show'])
    ->parameters(['technologies', 'technology']);

Route::apiResource('/users', UserController::class)
    ->only(['index', 'show'])
    ->parameters(['users', 'user']);

Route::apiResource('/trainings', TrainingController::class)
    ->only(['index', 'show'])
    ->parameters(['trainings', 'training']);

