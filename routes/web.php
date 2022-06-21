<?php

use Illuminate\Support\Facades\Route;




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




Route::get('/register', 'App\Http\Controllers\RegisterController@index')->name('register'); 
Route::post('/register', 'App\Http\Controllers\RegisterController@register'); 


//Definiamo la route home
Route::get('/home', 'App\Http\Controllers\HomeController@index')->name('home');




Route::get('/login', "App\Http\Controllers\LoginController@login")->name('login'); 
Route::get("/logout", "App\Http\Controllers\LoginController@logout")->name("logout");
Route::post('/login', "App\Http\Controllers\LoginController@checkLogin");


Route::get('/shop', 'App\Http\Controllers\ShopController@index')->name('shop'); 
Route::post('/shop', 'App\Http\Controllers\ShopController@createCookie');
Route::get('/aggiungi', 'App\Http\Controllers\ShopController@CreateDynamicPage')->name('aggiungi');


Route::get('/carrello', 'App\Http\Controllers\CarrelloController@index')->name('carrello'); 
Route::get('/cookie_get', 'App\Http\Controllers\CarrelloController@GetArticles')->name('getCarrello');
Route::get('/cookie/delete/{query}', 'App\Http\Controllers\CarrelloController@DeleteSpecificCookie')->name('delete_one_cookie');
Route::post('/carrello', 'App\Http\Controllers\CarrelloController@CompleteOrder');
Route::get('/cancellatutticookie', 'App\Http\Controllers\CarrelloController@DeleteEveryCookie')->name('cancellatutticookie'); 
Route::get('/saveforlater/{query}', 'App\Http\Controllers\CarrelloController@SaveforLater')->name("saveforlater");
Route::get('/saveforlater', 'App\Http\Controllers\CarrelloController@WriteElementForLater')->name("saveforlater2");
Route::get('/saveforlater/delete/{query}', 'App\Http\Controllers\CarrelloController@DeleteRowForLater')->name("deleterowforlater");
Route::get('/createcookie/{query}', 'App\Http\Controllers\CarrelloController@CreateCookieFromSaveForLater')->name("deleterowforlater");

Route::get('/discover', 'App\Http\Controllers\DiscoverController@index')->name('discover'); 
Route::get('/alimenti/{query}', 'App\Http\Controllers\DiscoverController@searchFood')->name('api');




