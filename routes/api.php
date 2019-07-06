<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('/', function () {
    return "Please login on '/login'";
});

Route::post('/register', 'UserController@register');
    Route::post('/login', 'UserController@authenticate');
    Route::get('open', 'DataController@open');

    Route::group(['middleware' => ['jwt.verify']], function() {
        Route::get('user', 'UserController@getAuthenticatedUser');
        Route::post('/add', 'newsController@addNews');
        Route::get('/allnews', 'newsController@allNews');
        Route::get('/removeNews/{id}', 'newsController@removeNews');
        Route::get('/getSingleNews/{id}', 'newsController@getSingleNews');
        Route::get('closed', 'DataController@closed');
        Route::post('logout', 'UserController@logout');
    });
Route::middleware('jwt.refresh')->get('/refresh', 'UserController@refresh');