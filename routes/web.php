<?php

use Illuminate\Support\Facades\Route;


use App\Http\Controllers\PagesController;
Route::get('/', [PagesController::class, 'home']);
Route::get('/about', [PagesController::class, 'about']);
Route::get('/contact', [PagesController::class, 'contact']);

use App\Http\Controllers\ProjectController;
// Route::get('/project', [ProjectController::class, 'index']);
// Route::get('/project/create', [ProjectController::class, 'create']);
// Route::post('/project', [ProjectController::class, 'store']); //(store est une convention qu’il est conseillé de suivre)

Route::resource('/project', ProjectController::class);
