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
})->name('welcome');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/add_movies', 'MoviesController@create')->name('add_movies');
Route::get('/list_movies', 'MoviesController@index')->name('list_movies');
Route::post('/add_movies', 'MoviesController@store')->name('add_movies.store');
Route::get('/{movie}/edit_movies', 'MoviesController@edit')->name('edit_movies');
Route::post('/{movie}/update', 'MoviesController@update')->name('edit_movies.update');
Route::get('{movie}/view_movies', 'MoviesController@show')->name('view_movies');
Route::get('/{movie}/delete', 'MoviesController@destroy')->name('delete_movies');
Route::get('/profile', 'UserController@index')->name('profile_view');
Route::get('/manage_user', 'UserController@list')->name('user_list');
Route::get('/user_role', 'RoleController@index')->name('user_role');
Route::post('/user_role', 'RoleController@store')->name('add_role');
Route::post('/{user}/assign', 'RoleController@assignRole')->name('assign_role');
Route::get('/showtime', function(){
    return view('user.showtime');
})->name('showtime');