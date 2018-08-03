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
    return view('welcome');
});
<<<<<<< HEAD
Route::get('/other-page', function () {
    return view('welcome');
});
Route::get('/', 'HomeController@home');
=======
>>>>>>> 9c97e54a3bfec37d055ad466485e81e156f5bab1
