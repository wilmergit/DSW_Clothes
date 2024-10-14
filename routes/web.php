<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::delete('clothes/{clothe}', [ClotheController::class, 'destroy']);

use App\Http\Controllers\ClotheController;

Route::resource('clothes', ClotheController::class);