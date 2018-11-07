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
Route::view('/', 'pages.homepage');
Route::view('/exercise/upload', 'pages.exercise_upload');
Route::view('/exercise/search', 'pages.exercise_search');

Route::get('/testModel', 'TestController@getAllUsers');
Route::get('/testCreate', 'TestController@addUser');
?>
