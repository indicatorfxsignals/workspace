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

Route::get('/', function () {
    return view('home');
});

Route::get('/home-al', function () {
    return view('home_al');
});

Route::get('/pricing', function () {
    return view('pricing');
});

Route::get('/pricing-al', function () {
    return view('pricing_al');
});

Route::get('/faq', function () {
    return view('faq');
});

Route::get('/faq-al', function () {
    return view('faq_al');
});

Route::get('/support', function () {
    return view('support');
});

Route::get('/support-al', function () {
    return view('support_al');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/signup', function () {
    return view('signup');
});

Route::get('/forgetpassword', function () {
    return view('forgetpassword');
});
