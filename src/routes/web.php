<?php

use App\Http\Controllers\HistoricoController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RastreamentoController;
use App\Http\Controllers\SobreController;
use Illuminate\Support\Facades\Route;

Route::get('/', HomeController::class);

Route::get('sobre', SobreController::class);
Route::get('rastreamento', RastreamentoController::class)->name('frete.rastreamento');
Route::get('historico', HistoricoController::class)->name('frete.historico');
