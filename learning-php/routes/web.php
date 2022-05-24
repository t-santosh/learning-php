<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\LogoutController;
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
    return view('users/landing');
});

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [UserController::class, 'index'])->name('index-page');
Route::get('/admin', [UserController::class, 'login'])->name('login-page');

Route::post('/admin-dashboard', [UserController::class, 'auth'])->name('auth-page');

Route::get('/users', [AdminController::class, 'viewuser'])->name('view-users');

Route::get('/posts', [AdminController::class, 'viewpost'])->name('view-posts');
Route::get('/services', [AdminController::class, 'viewservice'])->name('view-services');

Route::get('/users/edit/{id}', [AdminController::class,'edit'])->name('users.edit');
Route::get('/users/delete/{id}', [AdminController::class,'delete'])->name('users.delete');
Route::post('/users/update', [AdminController::class,'update'])->name('users.update');


Route::get('/create', [AdminController::class, 'create'])->name('create-user');
Route::post('/store', [AdminController::class, 'store'])->name('store-user');

// Post create, edit and delete

Route::get('/post/create', [PostController::class, 'create'])->name('create-post');
Route::post('/store/post', [PostController::class, 'store'])->name('store-post');
Route::get('/post/edit/{id}', [PostController::class,'edit'])->name('post.edit');
Route::get('/post/delete/{id}', [PostController::class,'delete'])->name('post.delete');
Route::post('/post/update', [PostController::class,'update'])->name('post.update');


// Service create, edit and delete
Route::get('/service/create', [ServiceController::class, 'create'])->name('create-service');
Route::post('/store/service', [ServiceController::class, 'store'])->name('store-service');
Route::get('/service/edit/{id}', [ServiceController::class,'edit'])->name('service.edit');
Route::get('/service/delete/{id}', [ServiceController::class,'delete'])->name('service.delete');
Route::post('/service/update', [ServiceController::class,'update'])->name('service.update');

Route::group(['middleware' => ['auth']], function() {
    /**
    * Logout Route
    */
    Route::get('/logout', [LogoutController::class,'logout'])->name('logout.perform');
 });

// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// Auth::routes();

// Route::get('/home', 'App\Http\Controllers\HomeController@index')->name('home');

// Route::group(['middleware' => 'auth'], function () {
// 	Route::resource('user', 'App\Http\Controllers\UserController', ['except' => ['show']]);
// 	Route::get('profile', ['as' => 'profile.edit', 'uses' => 'App\Http\Controllers\ProfileController@edit']);
// 	Route::put('profile', ['as' => 'profile.update', 'uses' => 'App\Http\Controllers\ProfileController@update']);
// 	Route::get('upgrade', function () {return view('pages.upgrade');})->name('upgrade'); 
// 	 Route::get('map', function () {return view('pages.maps');})->name('map');
// 	 Route::get('icons', function () {return view('pages.icons');})->name('icons'); 
// 	 Route::get('table-list', function () {return view('pages.tables');})->name('table');
// 	Route::put('profile/password', ['as' => 'profile.password', 'uses' => 'App\Http\Controllers\ProfileController@password']);
// });

