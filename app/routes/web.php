<?php

use Illuminate\Support\Facades\Route;

Route::middleware(['auth:sanctum', 'verified'])->name('painel.')->prefix('')->namespace('App\Http\Controllers')->group(function () {

    // Home
    Route::get('', 'PainelController@home')->name('home');

    // Perfil
    Route::get('/perfil', 'ProfileController@index')->name('perfil.index');

    // Planos
    Route::namespace('Modulos')->prefix('planos')->name('planos.')->group(function () {
        Route::get('', 'PlanoController@index')->name('index');
        Route::get('/{url}/checkout/pagamento', 'PlanoController@checkout')->name('checkout');
        Route::post('/{url}/checkout/pagamento', 'PlanoController@capture')->name('capture');
        Route::get('/{url}/checkout/aprovado', 'PlanoController@captureSuccess')->name('capture.success');
    });

    // Consultas
    Route::namespace('Modulos')->prefix('consultas')->name('consultas.')->group(function () {
        Route::get('', 'ConsultaController@index')->name('index');
    });

});
