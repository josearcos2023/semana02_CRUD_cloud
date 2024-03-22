<?php

use App\Http\Controllers\AgendasController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('agendas', AgendasController::class); 
