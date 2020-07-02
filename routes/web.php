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


// Route::get('/register','HomeController@register');
// //Route::get('/welcome','AuthController@welcome');
// Route::post('/welcome','AuthController@welcome_post');


// Route::get('/form','RegisterController@form');

// Route::get('/sapa','RegisterController@sapa');

// Route::post('/sapa', "RegisterController@sapa_post");

Route::get('/', function () {
    return view('tables.table');
});

Route::get('/data-tables', function () {
    return view('tables.data-table');
});

Route::get('/master', function () {
    return view('adminlte.master');
});

Route::get('/items', function(){
    return view('items.index');
});

Route::get('/items/create', function(){
    return view('items.create');
});

