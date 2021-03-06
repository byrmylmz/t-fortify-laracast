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

Route::middleware(['auth','verified'])->get('/dashboard',function(){
    return view('dashboard');
})->name('dashboard');


Route::middleware(['auth','verified','password.confirm'])->get('/profile',function(){
    return view('profile');
})->name('profile');

Route::middleware(['auth','verified'])->get('/password',function(){
    return view('password');
})->name('password');

Route::middleware(['auth','verified'])->get('/two-factor-auh',function(){
    return view('two-factor-auth');
})->name('two-factor-auth');