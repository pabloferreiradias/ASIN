<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CasoController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('novo-caso',[CasoController::class,'novoCaso']);
