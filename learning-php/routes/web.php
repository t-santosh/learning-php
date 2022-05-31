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
Route::get('/admin-dashboard', [UserController::class, 'dashboard_landing_page'])->name('dashboard-landing-page');
Route::get('/register-user', [UserController::class, 'register'])->name('register-page');
Route::post('/store-user', [UserController::class, 'auth_register'])->name('auth-register');

Route::get('/post', [UserController::class, 'post'])->name('user-post-page');
Route::get('/auth-post', [UserController::class, 'auth_post'])->name('auth-post');

Route::get('/users-list', [UserController::class, 'users_list'])->name('users-list-page');

Route::get('/edit/{id}', [UserController::class, 'edit'])->name('edit-page');
Route::post('/update', [UsersController::class, 'update'])->name('user-update');