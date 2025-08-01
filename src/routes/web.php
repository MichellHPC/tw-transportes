<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\SobreController;
use Illuminate\Support\Facades\Route;

Route::get('/', HomeController::class);

Route::get('sobre', SobreController::class);