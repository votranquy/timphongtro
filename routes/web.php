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
use App\TheLoai;


Route::get('/',function(){
	return view('welcome');
});

Route::get('thu', function () {
    return view('admin.loaiphong.them');
});


Route::group(['prefix'=>'admin'],function(){
	Route::group(['prefix'=>'loaiphong'],function(){
		Route::get('danhsach','LoaiPhongController@getDanhSach');

		Route::get('sua/{id}','LoaiPhongController@getSua');

		Route::post('sua/{id}','LoaiPhongController@postSua');

		Route::get('them','LoaiPhongController@getThem');

		Route::post('them','LoaiPhongController@postThem');

		Route::get('xoa/{id}','LoaiPhongController@getXoa');
	});

	Route::group(['prefix'=>'loaitin'],function(){
		Route::get('danhsach','LoaiTinController@getDanhSach');

		Route::get('sua/{id}','LoaiTinController@getSua');

		Route::post('sua/{id}','LoaiTinController@postSua');

		Route::get('them','LoaiTinController@getThem');

		Route::post('them','LoaiTinController@postThem');

		Route::get('xoa/{id}','LoaiTinController@getXoa');
	});

	Route::group(['prefix'=>'tintuc'],function(){
		Route::get('danhsach','TinTucController@getDanhSach');

		Route::get('sua','TinTucController@getSua');

		Route::get('them','TinTucController@getThem');

		Route::post('them','TinTucController@postThem');
	});

	Route::group(['prefix'=>'user'],function(){
		Route::get('danhsach','UserController@getDanhSach');

		Route::get('sua','UserController@getSua');

		Route::get('them','UserController@getThem');
	});

	Route::group(['prefix'=>'slide'],function(){
		Route::get('danhsach','SlideController@getDanhSach');

		Route::get('sua','SlideController@getSua');

		Route::get('them','SlideController@getThem');
	});

	Route::group(['prefix'=>'ajax'],function(){
		Route::get('loaitin/{idTheLoai}','AjaxController@getLoaiTin');

	});

});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
