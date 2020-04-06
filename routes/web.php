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

/////// This is default added line when use Laravel AUTH
/////// Jyare apde url ma public pachi home "http://localhost/laravelauth/public/home" add kriye tyare login page open thai jai jo login na hoi to
/// /// Ane "http://localhost/laravelauth/public/" a page par Laravel nu welcome page display thai

//Route::get('/home', 'HomeController@index')->name('home');


////// A line ma me middleware add kryu
/////  A nathi evu thai ke jyare apde "http://localhost/laravelauth/public/" kriye tyare jo user login na hoi to  welcome page no dekhai direct te "http://localhost/laravelauth/public/login" redirect thai jai

Route::group(['middleware' => ['auth']], function () {
    Route::get('/', 'HomeController@index')->name('home');
});