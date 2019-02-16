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

Auth::routes();
//Front End Routes
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/frontend/contact', 'FrontendController@contact')->name('contact');
Route::get('/frontend/about', 'FrontendController@about')->name('about');
Route::get('contact-us', 'ContactUSController@contactUS');
Route::post('contact-us', ['as'=>'contactus.store','uses'=>'ContactUSController@contactUSPost']);
Route::post('subscribe',['as'=>'subscriber','uses'=>'ContactUSController@subscribe']);

//Dashboard Routes

Route::get('dashboard', ['uses'=>'HomeController@index', 
'as'=>'dashboard'
]);
