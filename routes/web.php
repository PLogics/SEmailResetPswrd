<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RController;

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

//login & signup//
Route::get('/loginRegister', 'App\Http\Controllers\RController@login_register');
Route::post('/signUp', 'App\Http\Controllers\RController@sign_up');
Route::post('/login', 'App\Http\Controllers\RController@login');
Route::get('/home','App\Http\Controllers\RController@home');

//reset password//
Route::get('/resetpassword', 'App\Http\Controllers\RController@resetpassword');
Route::post('updatePassword', 'App\Http\Controllers\RController@update_password');
Route::get('/forgotPassword', 'App\Http\Controllers\RController@forgot_password');
Route::post('emailforgotpassword','App\Http\Controllers\RController@email_forgot_password');
Route::get('/resetemail','App\Http\Controllers\RController@reset_email');

//logout//
Route::get('/logoutUser', 'App\Http\Controllers\RController@logout');

//for email//
Route::get('emailverify/{id}','App\Http\Controllers\RController@emailverify');
// Route::get('/mail','App\Http\Controllers\RController@index');
