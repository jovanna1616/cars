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
	$name = 'Jovana';
	$age = 15;
    return view('welcome', compact('name', 'age'));
});


Route::get('/about', function () {

	$about_title = 'About us';

    return view('about', compact('about_title'));
});
