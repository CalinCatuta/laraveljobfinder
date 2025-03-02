<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\JobController;


Route::get('/', [HomeController::class, 'index']);
Route::get('/jobs', [JobController::class, 'index']);
Route::get('/jobs/create', [JobController::class, 'create']);
// We use /{job} instead of {id} because we use Implicit Route Model Binding in JobController
Route::get('/jobs/{job}', [JobController::class, 'show'])->name('jobs.show');

