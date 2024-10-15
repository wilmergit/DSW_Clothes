<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClotheController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('clothes/{clothe}', [ClotheController::class, 'show']);
Route::patch('clothes/{clothe}', [ClotheController::class, 'update']);
Route::delete('clothes/{clothe}', [ClotheController::class, 'destroy']);
Route::resource('clothes', ClotheController::class);