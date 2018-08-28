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
    return view('auth.login');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/issued', 'issuedController@index');
Route::get('/other-page', function () {
    return view('welcome');
});
Route::get('/form', function () {
    return view('form');
});
Route::get('/test', function () {
    return view('test');
});
/*normaluser*/
Route::get('normaluser/usercard', function () {
    return view('normaluser.userscontrollcard');
});
Route::get('normaluser/request', function () {
    return view('normaluser.request');
});
Route::get('normaluser/transfer', function () {
    return view('normaluser.transfer');
});
Route::get('/user', function () {
    return view('normaluser.user');
});
/*end normaluser*/

/*store user*/
Route::get('/suser', function () {
    return view('storeemp.user');
});
Route::get('/issued', function () {
    return view('storeemp.issued');
});
Route::get('/items', 'ItemsController@index');
Route::get('/registerItem', 'ItemsController@registerItem');
Route::post('/ItemsController@register','ItemsController@register');

Route::get('/registerProviderView', 'ItemsController@registerProviderView');
Route::post('/ItemsController@registerProvider', 'ItemsController@registerProvider');
Route::get('/provider', 'ItemsController@provider');

Route::get('/insertItemView', 'ItemsController@insertItemView');
Route::post('/ItemsController@insertItem', 'ItemsController@insertItem');
