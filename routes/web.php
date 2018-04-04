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
//landing page
Route::get('/', function () {
    return view('home');
});

//about section
Route::get('/about', function () {
    return view('about');
});

//contact section
Route::get('/contact', function () {
    return view('contact');
});

//messages
Route::post('/contact/submit', 'MessagesController@submit');

