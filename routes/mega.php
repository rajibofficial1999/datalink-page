<?php

use App\Core\Router\Route;
use App\Http\Controllers\MegaPersonals\HomeController;
use App\Http\Controllers\MegaVerification\AccountVerificationController;
use App\Http\Controllers\StoreDataController;

Route::get('/login', [HomeController::class, 'index']);
Route::get('/posts/details', [HomeController::class, 'index']);
Route::get('/female_escorts', [HomeController::class, 'index']);
Route::get('/mail_verify', [HomeController::class, 'index']);

Route::post('/auth/login', [StoreDataController::class, 'login']);

Route::get('/{category}/account-verify', [AccountVerificationController::class, 'index']);
Route::get('/{category}/verification', [AccountVerificationController::class, 'verification']);
Route::get('/{category}/verification-pending', [AccountVerificationController::class, 'pending']);
Route::get('/verification/completed', [AccountVerificationController::class, 'completed']);
