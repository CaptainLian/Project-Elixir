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
    //return view('welcome');
	return view('pages.homepage');
});

Route::get('/exercise/upload', function(){
	return view('pages.exercise_upload');
});

Route::get('/exercise/search', function(){
	return view('pages.exercise_search');
});


?>
