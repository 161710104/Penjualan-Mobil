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


Route::get('/baru', function () {
    return view('layouts.table');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::get('/layout', function () {
    return view('tipe.index');
});

Route::group(['prefix' => 'admin', 'middleware' =>['auth' , 'role:admin']],function (){
    Route::resource('/merkmobil','MerkController');
	Route::resource('/mobil','MobilController');
	Route::resource('/member','MemberController');
	Route::resource('/berita','BeritaController');
	Route::resource('/comment','CommentController');
	Route::resource('/detail_mobil','DetailMobilController');
	Route::resource('/authors','AuthorsController');
	Route::get('/calender', function () {
    return view('backend.calender');
		});

    });

