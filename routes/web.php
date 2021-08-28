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

Route::get('/login', 'AuthController@login')->name('auth.login');

Route::post('/login', 'AuthController@loginUser')->name('auth.login-user');

Route:: get('/logout', 'AuthController@logout')->name('auth.logout');

Route::get('/bank-account', 'AuthController@registerBankAccount')->name('auth.register-bank-account');

Route::post('/bank-account-2', 'AuthController@saveBankAccount')->name('auth.save-bank-account');

Route::get('/movement/{account}', 'MovementsController@getMovements')->name('movements.movements');

Route::post('/movement-created/{account}', 'MovementsController@createMovement')->name('movements.create');

Route::get('/history/{balance}', 'HistoryController@getHistory')->name('history.history');
