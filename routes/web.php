<?php

use App\Http\Controllers\OperacionesController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/calculadora', [OperacionesController::class, 'index']);
Route::post('/calculadora/sumar/{n1}/{n2}', [OperacionesController::class, 'sumar'])->name('calculadora.sumar');;
