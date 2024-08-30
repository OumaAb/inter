<?php


use App\Http\Controllers\JustificationController;
use App\Http\Controllers\DesignationController;

// Routes for Justifications
Route::resource('justifications', JustificationController::class);

// Routes for Designations
Route::resource('designations', DesignationController::class);
