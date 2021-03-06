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

Route::group(['middleware' => ['auth', 'user']], function() {
    // put all your admin routes here
    Route::get('normaluser/usercard', function () {
        return view('normaluser.userscontrollcard');
    });
    Route::get('normaluser/request','normaluserController@request');
    Route::get('normaluser/transfer', function () {
        return view('normaluser.transfer');
    });
    Route::get('/user', function () {
        return view('normaluser.user');
    });
    Route::post('/normaluserController@requeststore','normaluserController@requeststore');
});

Route::group(['middleware' => ['auth', 'semployee']], function() {

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
    
    Route::get('/insertItemView', 'StoreempController@Index');
    Route::post('/ItemsController@insertItem', 'ItemsController@insertItem');
});

//->middleware('auth');
Route::middleware(['auth'])->group(function(){
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
    
    /*end normaluser*/
    
    /*store user*/
    
    

});
