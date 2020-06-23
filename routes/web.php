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
    return view('home');
});

Route::get('/contact', 'StaffsController@index');
Route::get('/contact2', 'UsersController@index');

Route::delete('/staff/{id}','StaffsController@destroy');
Route::delete('/staff2/{id}','UsersController@destroy');

Route::post('/staff','StaffsController@store');
Route::post('/staff2','UsersController@store');

Route::get('/post', function () {
    return view('post');
});

Route::get('/admin','AdminController@index');



Auth::routes();

Route::fallback(function(){
   Route::redirect(abort(404));
});
