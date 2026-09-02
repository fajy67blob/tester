<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryElectronic;

//
Route::middleware('auth')->group(function () {
    //
    Route::resource('/category', CategoryElectronic::class);
});
Route::get('/', function () {
    return view('welcome');
});
