<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Home;
use App\Http\Controllers\FormController;


Route::get('/', [Home::class,'Index'] );
Route::post('/message', [FormController::class,'Message'] );
Route::post('/book/insert', [FormController::class,'Books'] );
