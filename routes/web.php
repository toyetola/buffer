<?php

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
    return view('Account.login');
});


Route::get('/newAccount', function () {
    return view('Account.addUser');
})->name('register');

Route::get('/dashboard', function () {
    $news = \App\Models\news::all();
    return view('dashboard', ['news'=>$news]);
})->name('dashboard');

