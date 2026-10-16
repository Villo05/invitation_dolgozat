<?php

use App\Http\Controllers\EventController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');



Route::get('/events/{id}',[EventController::class,'show']);
Route::post('/events/{id}',[EventController::class,'store']);
Route::put('/events/{id}',[EventController::class,'update']);
Route::delete('/events/{id}',[EventController::class,'destroy']);

