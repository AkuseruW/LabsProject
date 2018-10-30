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

Auth::routes();

//Admin Blade

Route::get('/adminHome', 'HomeController@index')->name('home');
Route::get('/adminValidation','HomeController@indexValidationPost');
Route::get('/homeEdit','HomeController@indexHomeEdit');

//Crate Admin
Route::get('/', function () {
    return view('home');
});


//Edite-Text

Route::post('/editText','TextEditorController@create');
