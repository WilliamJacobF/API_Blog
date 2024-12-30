<?php

use App\Http\Controllers\ApiController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/blog', [ApiController::class, 'index']);
Route::post('/blog', [ApiController::class, 'store']);
Route::get('/blog/{blog}', [ApiController::class, 'show']);
Route::put('/blog/{blog}', [ApiController::class, 'update']);
Route::delete('/blog/{blog}', [ApiController::class, 'destroy']);



