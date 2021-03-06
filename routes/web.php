<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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
    return view('welcome');
});

// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// Route::get('/admin','Admin\Logincontroller@showLoginForm')->name('admin.login');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Route::get('admin', 'Admin\LoginController@showLoginForm')->name('admin.login');
Route::get('admin', ['App\Http\Controllers\Admin\LoginController@showLoginForm'])->name('admin.login');

// Route::post('admin','Admin\LoginController@showLoginForm');

// Route::get('admin/home','AdminController@index');