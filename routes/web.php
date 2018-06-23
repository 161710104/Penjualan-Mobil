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

Route::get('/contact', function () {
    return view('frontend.contact');
});
Route::get('/about', function () {
    return view('frontend.about');
});


Route::group(['prefix' => 'admin', 'middleware' =>['auth' , 'role:admin']],function (){
    Route::resource('/merkmobil','MerkController');
	Route::resource('/mobil','MobilController');
	Route::resource('/berita','BeritaController');
	Route::get('query', 'BeritaController@search');
	Route::resource('/comment','CommentController');
	Route::resource('/detail_mobil','DetailMobilController');
	Route::resource('/user','UserController');
	Route::resource('/contact','ContactController');
	Route::resource('/about','AboutController');
	Route::get('/calender', function () {
    return view('backend.calender');
		});
	Route::get('/coba', function () {
    return view('backend.coba');
		});

	Route::get('export/berita', [
	'as' => 'export.berita',
	'uses' => 'BeritaController@export'
		]);
	Route::post('export/berita', [
	'as' => 'export.berita.post',
	'uses' => 'BeritaController@exportPost'
]);

    });
Route::group(['prefix' => 'member', 'middleware' =>['auth' , 'role:member']],function (){
	Route::get('/mobil','MobilController@memberindex');
	Route::resource('/detail_mobil','DetailMobilController');
});

Route::get('catalog/{id}', 'FrontendController@showpermerk');

