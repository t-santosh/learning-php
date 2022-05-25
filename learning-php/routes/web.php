<?php

use App\Http\Controllers\UserController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [UserController::class, 'index'])->name('index-page');
Route::get('/admin', [UserController::class, 'login'])->name('login-page');

Route::post('/admin-dashboard', [UserController::class, 'auth_login'])->name('auth-login');
Route::get('add-user', [UserController::class, 'register'])->name('register-page');
Route::post('/admin-dashboard/auth-register', [UserController::class, 'auth_register'])->name('auth-register');


