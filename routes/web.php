<?php

use App\Http\Controllers\Web\HomeController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [HomeController::class, 'Index'])->name('home');
Route::view('/privacy-policy', 'privacy')->name('privacy-policy');
Route::view('/terms-of-use', 'terms')->name('terms');
Route::view('/contact-us', 'contact')->name('contact-us');


require __DIR__ . '/auth.php';
