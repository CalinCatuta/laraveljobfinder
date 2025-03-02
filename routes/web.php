<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\JobController;


Route::get('/', [HomeController::class, 'index']);
// If you haven't defined this, Laravel won’t know where to redirect after creating the job.
Route::get('/jobs', [JobController::class, 'index'])->name('jobs.index');
Route::get('/jobs/create', [JobController::class, 'create']);
// We use /{job} instead of {id} because we use Implicit Route Model Binding in JobController
Route::get('/jobs/{job}', [JobController::class, 'show'])->name('jobs.show');

// post req
Route::post('/jobs', [JobController::class, 'store']);