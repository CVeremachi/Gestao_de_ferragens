<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FerragemController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\Authcontroller;
use App\Http\Controllers\dashboardController;

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

Route::get('/principal', function () {
    return view('welcome');
})->middleware('usermid')->name('home');

Route::get('/materiais', [FerragemController::class, 'material'])->middleware('usermid')->name('buy');

Route::get('/cadastro', function () {
    return view('login');
})->name('user.cadastro');

Route::post('/login', [AuthController::class, 'login'])->name('login');

Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/dashboard', [dashboardController::class, 'index'])->middleware('admin')->name('admin');

Route::post('/user/store', [UserController::class, 'store'])->name('user.store');

Route::get('/material', function () {
    return view('buy');
});