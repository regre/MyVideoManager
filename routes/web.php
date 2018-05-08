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
// use App\Mail\ActivateUserAccount; 
// use App\User;

// Route::get('/mail', function () {
// 	$user = User::find(1);

// 	return new ActivateUserAccount($user);
// });

Route::get('/', 'GuestController@welcome');
Route::get('/activate-account/{token}', 'GuestController@verify')->name('activate-account');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
