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


Route::get('/','BasicController@index')->name('welcome');

Auth::routes();

Auth::routes(['verify' => true]);

Route::get('/home', 'HomeController@index')->name('home');

/* Basic Navigation Lists */

Route::get('/pricing', 'BasicController@pricing')->name('pricing');

Route::get('/faq', 'BasicController@faq')->name('faq');

Route::get('/support', 'BasicController@support')->name('support');

/* Misc Routes */

Route::get('/privacy-policy', 'BasicController@policy')->name('policy');

Route::get('/terms-and-conditions', 'BasicController@term')->name('term');


/*----TEST----*/

Route::get('/ool',function (){
    return view('login');
});


