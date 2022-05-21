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

<<<<<<< HEAD
Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function(){
    return view('users/home');
});
=======
// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [UserController::class, 'index'])->name('index-page');
Route::get('/admin', [UserController::class, 'login'])->name('login-page');

Route::post('/admin-dashboard', [UserController::class, 'auth'])->name('auth-page');
>>>>>>> 8438bea5ee49e91ef9a28a45ca4e7dba2f81e2a3
