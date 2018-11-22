<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;//Thư viện hỗ trợ đăng nhập
use Illuminate\Http\Request;
use App\BaiDang;
use App\LoaiPhong;
use App\Anh;
class PageController extends Controller
{
    function __construct(){
    	$baichinhchu = BaiDang::where('post_type_id',2)->take(4)->get();
    	$baimoi = BaiDang::where('post_type_id',2)->take(5)->get();
    	view()->share('baichinhchu',$baichinhchu);
    	view()->share('baimoi',$baimoi);
    }
    function trangchu(){
    	$baidangnoibat = BaiDang::where('post_type_id',2)->take(4)->get();
    	$loaiphong = LoaiPhong::all();
    	return view('pages.trangchu',['baidangnoibat'=>$baidangnoibat,'loaiphong'=>$loaiphong]);
    }
}
