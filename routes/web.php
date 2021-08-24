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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', 'HomepageController@index')->name('homepage');

Route::get('/hello-world', function(){
    return 'hola mundo';
});

Route::get('/register', 'AuthController@register')->name('auth.register');

Route::post('/register', 'AuthController@saveUser')->name('auth.save-user');