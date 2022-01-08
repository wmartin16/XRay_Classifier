<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\ThemeController;
use App\Http\Controllers\UploadImageController;
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

Route::get('/', function () {
    return redirect(url('/login'));
});

Route::get('/login', [AuthController::class, 'displayLogin'])->name('login');
Route::post('/login', [AuthController::class, 'doLogin']);
Route::post('/logout', [AuthController::class, 'doLogout'])->name('logout');
Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/register', [RegisterController::class, 'displayRegister'])->name('register');
Route::post('/register', [RegisterController::class, 'doRegister']);
Route::put('/themes', [ThemeController::class, 'changeTheme'])->name('change_theme');
Route::get('/upload_image', [UploadImageController::class, 'index'])->name('upload_image');
Route::post('/upload_image', [UploadImageController::class, 'storeImage'])->name('store_image');
