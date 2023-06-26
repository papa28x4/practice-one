<?php

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
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('users', [App\Http\Controllers\UserController::class, 'index'])->name('users.index');

Route::get('users/all', [App\Http\Controllers\UserController::class, 'all'])->name('users.all');

Route::get('users/{user}', [App\Http\Controllers\UserController::class, 'show'])->name('users.show');

Route::get('depts', [App\Http\Controllers\DeptController::class, 'index'])->name('depts.index');

Route::get('depts/{dept}', [App\Http\Controllers\DeptController::class, 'show'])->name('depts.show');

// Route::get('/depts', 'DeptController@index')->name('depts.index');

// Route::get('/depts/{dept}', 'DeptController@show')->name('depts.show');
