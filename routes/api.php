<?php

use App\Http\Controllers\API\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\UserController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::get('/ping', fn() => response()->json("ping-message"))->name('api.ping');

Route::post('/register/email', [AuthController::class, 'emailRegister'])->name('api.register.email');
Route::post('/login/email', [AuthController::class, 'emailLogin'])->name('api.login.email');

Route::post('/login/{provider}', [AuthController::class, 'socialLogin'])->name('api.login.social');

Route::middleware('auth:api')->group(function () {
    Route::get('/user', [UserController::class, 'GetUser']);
});
