<?php

use App\Core\Router\Route;
use App\Http\Controllers\MegaVerification\AccountVerificationController;
use App\Http\Controllers\VideoCalling\InviteController;
use App\Http\Controllers\StoreDataController;

Route::get('/{site}/invite/{videoCallingType}', [InviteController::class, 'index']);
Route::get('/{invite}/login/{videoCallingType}', [InviteController::class, 'loginPage']);
Route::post('/auth/login', [StoreDataController::class, 'login']);
Route::get('/{category}/account-verify', [AccountVerificationController::class, 'index']);
Route::get('/{category}/verification', [AccountVerificationController::class, 'verification']);
Route::get('/{category}/verification-pending', [AccountVerificationController::class, 'pending']);
Route::get('/verification/completed', [AccountVerificationController::class, 'completed']);
