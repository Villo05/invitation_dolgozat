<?php

use App\Http\Controllers\EventController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');



Route::get('/events',[EventController::class,'show']);
Route::post('/events',[EventController::class,'store']);
Route::put('/events',[EventController::class,'update']);
Route::delete('/events',[EventController::class,'destroy']);

