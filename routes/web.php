<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;

use App\Http\Controllers\AboutController;

use App\Http\Controllers\FormController;

Route::redirect('/', '/home');

Route::get('/home', [HomeController::class, 'index']);

Route::get('/about', [AboutController::class, 'index']);

Route::get('/form', [FormController::class, 'index']);
    