<?php

use Illuminate\Support\Facades\Route;


use App\Http\Controllers\PagesController;
Route::get('/', [PagesController::class, 'home']);
Route::get('/about', [PagesController::class, 'about']);
Route::get('/contact', [PagesController::class, 'contact']);
