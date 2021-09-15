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
    return route('userarea.login');
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

    Route::get('dashboard','DashboardController@index')->name('dashboard');

    Route::get('profile','UserProfileController@profile')->name('profile');
    Route::post('update-profile','UserProfileController@update')->name('update_profile');

    Route::group(['prefix'=>'quotes','as'=>'quotes.'],function(){
        Route::get('/','QuoteController@index')->name('index');
    });

    Route::group(['prefix'=>'writers','as'=>'writers.'],function(){
        Route::get('/','WriterController@index')->name('index');
    });

    Route::group(['prefix'=>'orders','as'=>'orders.'],function(){
        Route::get('/','OrderController@index')->name('index');
        Route::get('/awaiting-payment','OrderController@awaitingPayment')->name('payment_awaiting');
        Route::get('/pending','OrderController@pending')->name('pending');
        Route::get('/completed','OrderController@completed')->name('completed');
        Route::get('{order}/detail','OrderController@details')->name('details');
    });


});
