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
//use App\TheLoai;


// Route::get('/',function(){
// 	return view('welcome');
// });

Route::get('thu', function () {
    return view('admin.loaiphong.them');
});

Route::get('profile',function(){
	return view('view');
});
Route::get('updulieu','PageController@getupdulieu');
Route::post('updulieu','PageController@postupdulieu');

// Route::get('trangchu','PageController@trangchu');

Route::get('trangnhap/{id}','PageController@getTrangnhap');


// Route::get('sua/{id}','PageController@getsua');
// Route::post('sua/{id}/{idbaidang}','PageController@postsua');
// Route::get('thongbao','PageController@getthongbao');
Route::post('binhluan/{id}','BinhLuanController@postbinhluan');
Route::get('dangbaichothue','PageController@getdangbaichothue');
Route::post('dangbaichothue/{id}','PageController@postdangbaichothue');
Route::get('dangbaicanthue','PageController@getdangbaicanthue');
Route::post('dangbaicanthue/{id}','PageController@postdangbaicanthue');
// Route::get('login','PageController@getLogin');
// Route::post('login','PageController@postLogin');
Route::get('map','PageController@getMap');
// Route::get('quanlytinchothue','PageController@getquanlytinchothue');
// Route::get('quanlytincanthue','PageController@getquanlytincanthue');
// Route::post('xemthongbao/{idbaiviet}/{idthongbao}','PageController@postxemthongbao');
// Route::get('xoabaidang/{idbaiviet}/{idquanly}','PageController@getxoabaidang');


Route::get('/','PageController@trangchu');
Route::get('baidang/{id}','PageController@getBaiDang');
Route::get('loaiphong/{id}','PageController@getLoaiPhong');

Route::get('dangnhap','PageController@getdangnhap');
Route::post('dangnhap','PageController@postdangnhap');
Route::get('dangxuat','PageController@getdangxuat');
Route::get('dangky','PageController@getdangky');
Route::post('dangky','PageController@postdangky');

Route::group(['prefix'=>'user'],function(){
	Route::group(['prefix'=>'thongbao'],function(){
		Route::get('danhsach','PageController@getDanhsachThongbao');
		Route::post('xem/{idbaiviet}/{idthongbao}','PageController@postXemThongbao');

	});
	Route::group(['prefix'=>'binhluan'],function(){
		Route::get('danhsach','PageController@getDanhsachBinhluan');
		Route::post('them/{id}','PageController@postThemBinhLuan');
		Route::get('sua/{idbinhluan}','PageController@getSuaBinhluan');
		Route::post('sua/{idbinhluan}','PageController@postSuaBinhluan');
		Route::get('xoa/{idbinhluan}','PageController@getXoaBinhluan');

	});
	Route::group(['prefix'=>'profile'],function(){
		Route::get('xem','PageController@getXemProfile');
		Route::post('sua','PageController@postSuaProfile');
		Route::post('doimatkhau','PageController@postDoimatkhau');
	});
	Route::group(['prefix'=>'baidang'],function(){
		Route::group(['prefix'=>'baichothue'],function(){
			Route::get('danhsach','PageController@getDanhsachBaichothue');

			Route::get('sua/{idbaiviet}','PageController@getSuaBaichothue');

			Route::post('sua/{idbaiviet}','PageController@postSuaBaichothue');

			Route::get('them','PageController@getThemBaichothue');

			Route::post('them','PageController@postThemBaichothue');

			Route::get('xoa/{idbaiviet}','PageController@getXoaBaichothue');
		});
		Route::group(['prefix'=>'baicanthue'],function(){
			Route::get('danhsach','PageController@getDanhsachBaicanthue');

			Route::get('sua/{idbaiviet}','PageController@getSuaBaicanthue');

			Route::post('sua/{idbaiviet}','PageController@postSuaBaicanthue');

			Route::get('them','PageController@getThemBaicanthue');

			Route::post('them','PageController@postThemBaicanthue');

			Route::get('xoa/{idbaiviet}','PageController@getXoaBaicanthue');
		});
	});
});
// Route::get('admin/dangnhap','UserController@getdangnhapAdmin');
// Route::post('admin/dangnhap','UserController@postdangnhapAdmin');
// Route::get('admin/logout','UserController@getDangXuatAdmin');
Route::group(['prefix'=>'admin'],function(){
		Route::get('dangnhap','UserController@getdangnhapAdmin');

		Route::post('dangnhap','UserController@postdangnhapAdmin');

		Route::get('logout','UserController@getDangXuatAdmin');
	});

Route::group(['prefix'=>'admin','middleware'=>'adminLogin'],function(){
	Route::group(['prefix'=>'loaiphong'],function(){
		Route::get('danhsach','LoaiPhongController@getDanhSach');

		Route::get('sua/{id}','LoaiPhongController@getSua');

		Route::post('sua/{id}','LoaiPhongController@postSua');

		Route::get('them','LoaiPhongController@getThem');

		Route::post('them','LoaiPhongController@postThem');

		Route::get('xoa/{id}','LoaiPhongController@getXoa');

		Route::get('xem/{id}','LoaiPhongController@getXem');
	});

	Route::group(['prefix'=>'loaibai'],function(){
		Route::get('danhsach','LoaiBaiController@getDanhSach');

		Route::get('sua/{id}','LoaiBaiController@getSua');

		Route::post('sua/{id}','LoaiBaiController@postSua');

		Route::get('them','LoaiBaiController@getThem');

		Route::post('them','LoaiBaiController@postThem');

		Route::get('xoa/{id}','LoaiBaiController@getXoa');

		Route::get('xem/{id}','LoaiBaiController@getXem');
	});

	Route::group(['prefix'=>'nhom'],function(){
		Route::get('danhsach','NhomController@getDanhSach');

		Route::get('sua/{id}','NhomController@getSua');

		Route::post('sua/{id}','NhomController@postSua');

		Route::get('them','NhomController@getThem');

		Route::post('them','NhomController@postThem');

		Route::get('xoa/{id}','NhomController@getXoa');

		Route::get('xem/{id}','NhomController@getXem');
	});

	Route::group(['prefix'=>'user'],function(){
		Route::get('danhsach','UserController@getDanhSach');

		Route::get('sua/{id}','UserController@getSua');

		Route::post('sua/{id}','UserController@postSua');

		Route::get('them','UserController@getThem');

		Route::post('them','UserController@postThem');

		Route::get('xoa/{id}','UserController@getXoa');

		Route::get('xem/{id}','UserController@getXem');
	});
	Route::group(['prefix'=>'baidang'],function(){
		Route::get('danhsach','BaiDangController@getDanhSach');

		Route::get('sua/{id}','BaiDangController@getSua');

		Route::post('sua/{id}','BaiDangController@postSua');

		Route::get('xem/{id}','BaiDangController@getXem');

		Route::get('them','BaiDangController@getThem');

		Route::post('them','BaiDangController@postThem');

		Route::get('xoa/{id}','BaiDangController@getXoa');
	});
	Route::group(['prefix'=>'profile'],function(){
		Route::get('view/{id}','UserController@getView');

		Route::get('sua/{id}','UserController@getSua');

		Route::post('sua/{id}','UserController@postSua');

		Route::get('them','UserController@getThem');

		Route::post('them','UserController@postThem');

		Route::get('xoa/{id}','UserController@getXoa');
	});
	Route::group(['prefix'=>'binhluan'],function(){

		Route::get('xoa/{id}/{idBaiDang}','BinhLuanController@getXoa');
	});
	Route::group(['prefix'=>'ajax'],function(){
		Route::get('loaitin/{idTheLoai}','AjaxController@getLoaiTin');

	});

});
// Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
