<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\LibraryController;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware('auth')->group(function (){

    Route::resource('libraries', App\Http\Controllers\LibraryController::class);
    
});