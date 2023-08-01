<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\frontendController;
use App\Http\Controllers\HomeController;

Route::get('/', [frontendController::class, 'index']);
Route::get('/about', [frontendController::class, 'about']);
Route::get('/contact', [frontendController::class, 'contact']);
Route::get('/services', [frontendController::class, 'services']);

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');


//Users
Route::get('/users', [userController::class]);