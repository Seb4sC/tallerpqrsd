<?php

use App\Http\Controllers\FormularioController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/formulario', [FormularioController::class, 'show']);
