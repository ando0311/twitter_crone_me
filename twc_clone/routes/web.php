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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/{username}', 'ProfileController@show');

Route::group(['middleware' => 'auth'], function (){
    Route::post('/follows/{username}', 'UserController@follows');
    Route::post('/unfollows/{username}', 'UserController@unfollows');
});
Route::get('/{username}', 'ProfileController@show');
Route::get('/{username}/followers', 'ProfileController@followers');