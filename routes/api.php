<?php

use App\Http\Controllers\User\UserController;
use App\Http\Controllers\User\UserProfileController;
use Illuminate\Support\Facades\Route;

Route::prefix('v1')->middleware('auth:sanctum')->group(function () {
    Route::group(['prefix' => 'auth'], function () {
        Route::apiResource('/user', UserController::class);
        Route::apiResource('/user-profile', UserProfileController::class);
    });
});
