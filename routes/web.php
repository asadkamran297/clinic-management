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
    return redirect()->route('userarea.login');
    return view('welcome');
});

Route::group(['namespace'=>'Userarea','as'=>'userarea.'],function(){
    Route::group(['namespace'=>'Auth'],function(){
        Route::get('login', 'LoginController@showLoginForm')->name('login');
        Route::post('login', 'LoginController@authenticate')->name('authenticate');

        Route::get('register', 'RegisterController@showRegistrationForm')->name('register');
        Route::post('register', 'RegisterController@register');

        Route::get('password/reset', 'ForgotPasswordController@showLinkRequestForm')->name('password.request');
        Route::post('password/email', 'ForgotPasswordController@sendResetLinkEmail')->name('password.email');
        Route::get('password/reset/{token}', 'ResetPasswordController@showResetForm')->name('password.reset');
        Route::post('password/reset', 'ResetPasswordController@reset');
    });
    Route::group(['middleware'=>'auth'],function(){
        Route::get('logout', 'Auth\LoginController@logout')->name('logout');
        Route::get('dashboard',function(){
            return redirect()->route('userarea.appointments.index');
        })->name('dashboard');

        Route::resource('users','UserController');
        Route::resource('appointments','AppointmentController');
    });
});
