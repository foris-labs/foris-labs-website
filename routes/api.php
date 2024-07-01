<?php

use App\Http\Controllers\API\AuthController;
use App\Http\Controllers\API\AvatarController;
use App\Http\Controllers\API\StudyPlanController;
use App\Http\Controllers\API\TriviaController;
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
    Route::get('/forgot-password', [AuthController::class, 'forgotPassword'])->name('api.forgot-password');
    Route::post('/logout', [AuthController::class, 'logout'])->name('api.logout');

    Route::get('/user', [UserController::class, 'show'])->name('api.user');
    Route::put('/user', [UserController::class, 'update'])->name('api.user.update');
    Route::get('/user/leaderboard', [UserController::class, 'leaderboard'])->name('api.user.leaderboard');
    Route::get('/user/currencies', [UserController::class, 'currencies'])->name('api.user.currencies');
    Route::put('/user/currencies', [UserController::class, 'updateCurrencies'])->name('api.user.currencies.update');
    Route::get('/user/avatars', [UserController::class, 'avatars'])->name('api.user.avatars');
    Route::put('/user/avatar', [UserController::class, 'updateAvatar'])->name('api.user.avatar.update');
    Route::put('/user/metadata', [UserController::class, 'updateMetadata'])->name('api.user.metadata.update');

    Route::get('/avatars', [AvatarController::class, 'index'])->name('api.avatars');
    Route::get('/avatar', [AvatarController::class, 'show'])->name('api.avatar.show');

    Route::get('/trivia', [TriviaController::class, 'getForToday'])->name('api.trivia');
    Route::post('/trivia/submit', [TriviaController::class, 'submit'])->name('api.trivia.submit');

    Route::post('/feedback', [UserController::class, 'feedback'])->name('api.feedback');

    Route::get('study-plans', [StudyPlanController::class, 'index']);
    Route::post('study-plans', [StudyPlanController::class, 'store']);
    Route::get('study-plans/recommendations', [StudyPlanController::class, 'recommendations']);
    Route::get('study-plans/onboarding-questions', [StudyPlanController::class, 'onboardingQuestions']);
    Route::put('study-plans/{studyPlan}', [StudyPlanController::class, 'update']);
    Route::get('study-plans/{studyPlan}', [StudyPlanController::class, 'show']);
    Route::delete('study-plans/{studyPlan}', [StudyPlanController::class, 'destroy']);

});
