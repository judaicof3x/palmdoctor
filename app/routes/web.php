<?php

use Illuminate\Support\Facades\Route;



Route::middleware(['auth:sanctum', 'verified'])->name('painel.')->prefix('')->namespace('App\Http\Controllers')->group(function () {

    // Home
    Route::get('', 'PainelController@home')->name('home');

    // Consultas
    Route::namespace('Modulos')->prefix('consultas')->name('consultas.')->group(function () {
        Route::get('', 'ConsultaController@index')->name('index');
    });

});
