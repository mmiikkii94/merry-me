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
    return view('homepage');
});

Route::get('/salon', 'SalonController@index');
Route::get('/organisation', 'OrganisationController@index');
Route::get('/music', 'MusicController@index');
Route::get('/catering', 'CateringController@index');
Route::get('/clothe', 'ClotheController@index');
Route::get('/cake', 'CakeController@index');
Route::get('/photovideo', 'PhotovideoController@index');
Route::get('/jewelry', 'JewelryController@index');
Route::post('/salon/{salon}/salon', 'SalonController@store');
Auth::routes();
Route::get('/contact', 'ContactController@show');
Route::post('/contact',  'ContactController@mailToAdmin'); 
Route::get('/home', 'HomeController@index')->name('home');
