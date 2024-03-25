<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ActividadCalificableController;
use App\Http\Controllers\TemaController;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('temas', TemaController::class);
Route::resource('actividades', ActividadCalificableController::class);


Route::delete('/actividades/{actividad}', 'ActividadCalificableController@destroy')->name('actividades.destroy');