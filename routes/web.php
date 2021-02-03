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

Route::get('/homeuser', function () {
    return view('homeuser');
})->name('homeuser');

Auth::routes();

Route::get('/admin', 'App\Http\Controllers\AdminController@index');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/chatting', function () {
    return view('chatting');
})->name('chatting');

Route::get('/profile', function () {
    return view('profile');
})->name('profile');

Route::get('/group', function () {
    return view('group');
})->name('group');

Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout');