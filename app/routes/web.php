<?php

use Illuminate\Support\Facades\Route;



Route::middleware(['auth:sanctum', 'verified'])->name('painel.')->prefix('')->namespace('App\Http\Controllers')->group(function () {

    // Home
    Route::get('', 'PainelController@home')->name('home');

    // Planos
    Route::namespace('Modulos')->prefix('planos')->name('planos.')->group(function () {
        Route::get('', 'PlanoController@index')->name('index');
        Route::get('/checkout/pagamento/{url}', 'PlanoController@checkout')->name('checkout');
        Route::post('/checkout/pagamento/{url}', 'PlanoController@capture')->name('capture');
    });

    // Consultas
    Route::namespace('Modulos')->prefix('consultas')->name('consultas.')->group(function () {
        Route::get('', 'ConsultaController@index')->name('index');
    });

});
