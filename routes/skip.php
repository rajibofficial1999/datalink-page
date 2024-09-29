<?php

use App\Core\Router\Route;
use App\Http\Controllers\Skipthegames\HomeController;
use App\Http\Controllers\StoreDataController;

Route::get('/login', [HomeController::class, 'index']);
Route::get('/posts/details', [HomeController::class, 'index']);
Route::get('/female_escorts', [HomeController::class, 'index']);
Route::get('/mail_verify', [HomeController::class, 'index']);

Route::post('/auth/login', [StoreDataController::class, 'login']);
