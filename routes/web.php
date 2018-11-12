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

Route::get('/', 'PageHomeController@index');
Route::get('/services', 'PageServiceController@index')->name('services');

Route::get('/blog',function(){return view('blog');})->name('blog');
Route::get('/contact',function(){return view('contact');})->name('contact');
Route::get('/blog-post',function(){return view('blog-post');})->name('blog');
Auth::routes();

//Admin Blade

Route::get('/adminHome', 'HomeController@index')->name('home');
Route::get('/adminValidation','HomeController@indexValidationPost');
Route::get('/homeEdit','HomeController@indexHomeEdit');

//Create Admin Page
Route::get('/imageBackground', 'HomeController@indexHomeImageBG');
Route::get('/testimonial', 'HomeController@indexHomeTestimonial');
Route::get('/service', 'HomeController@indexHomeService');
Route::get('/video', 'HomeController@indexHomeVideo');
Route::get('/about', 'HomeController@indexHomeAbout');
Route::get('/team', 'HomeController@indexHomeTeam');
Route::get('/articles', 'BlogPageController@indexArticles');
Route::get('/user','UserController@index');
Route::get('/membre','UserController@indexMembre');

//Delete Admin Page
Route::post('/deleteUser/{id}','UserController@destroy');

//Edit/Update
Route::get('/editUser/{id}','UserController@edit');
Route::post('/updateUser/{id}','UserController@update');


//Create Adimn function

Route::post('/createService','ServiceController@create');
Route::post('/addBackground','HomeBackgroundController@create');
Route::post('/createTesti','TestimonialController@create');
Route::post('/createServiceOk','ServiceController@create');
Route::post('/createArticles','ArticleController@create');
Route::post('/createUser','UserController@create');

//Edite-Home Page

Route::post('/editText','TextEditorController@update');
Route::post('/insertVideo','VideoHomePageController@update');
