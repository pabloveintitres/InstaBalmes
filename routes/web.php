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


// Posts
Route::get('/p/create', 'PostController@create');

Route::post('/p', 'PostController@store');

Route::get('/p/{post}', 'PostController@show');

// Single profile
Route::get('/profile/{user}', 'ProfilesController@index')->name('profile.show');

// Show all profiles
Route::get('/profiles', 'ProfilesController@profiles');
