<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\FreteController;
use App\Http\Controllers\EtapaController;


// Exemplo de rota simples:
Route::get('/ola', function () {
    return "Olá, mundo!";
});


Route::post('/clientes', [ClienteController::class, 'store']);
Route::post('/fretes', [FreteController::class, 'store']);
Route::post('/etapas', [EtapaController::class, 'store']);