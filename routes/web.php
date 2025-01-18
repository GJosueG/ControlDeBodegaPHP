<?php

use App\Http\Controllers\EmpleadosController;
use App\Http\Controllers\OperacionesController;
use App\Models\Estado;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/create/{nombre}', [OperacionesController::class, 'create']);
Route::get('/update/{id}', [OperacionesController::class, 'update']);
Route::get('/show/{id}', [OperacionesController::class, 'show']);
Route::get('/showAll', [OperacionesController::class, 'showAll']);
Route::get('/delete/{id}', [OperacionesController::class, 'delete']);


Route::resource('/empleados', EmpleadosController::class)
    ->parameters(['empleados' => 'id'])
    ->except('show');
/*
Route::get('/empleados', [EmpleadosController::class, 'index']);
Route::get('/empleados/create', [EmpleadosController::class, 'create']);
Route::post('/empleados', [EmpleadosController::class, 'store']);
Route::get('/empleados/{id}/edit', [EmpleadosController::class, 'edit']);
Route::put('/empleados/{id}', [EmpleadosController::class, 'update']);
Route::delete('/empleados/{id}', [EmpleadosController::class, 'destroy']);
*/

// Route::get('/calculadora', [OperacionesController::class, 'index']);

