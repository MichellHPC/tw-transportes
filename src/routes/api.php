<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClienteController;


// Exemplo de rota simples:
Route::get('/ola', function () {
    return "Olá, mundo!";
});


Route::post('/clientes', [ClienteController::class, 'store']);