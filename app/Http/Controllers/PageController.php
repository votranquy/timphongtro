<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\BaiDang;
use App\LoaiPhong;
use App\Anh;
class PageController extends Controller
{
    function __construct(){
    	// $baidangnoibat = BaiDang::where('post_type_id',2)->get();
    	// $loaiphong = LoaiPhong::all();
    	// view()->share('baidangnoibat',$baidangnoibat);
    	// view()->share('loaiphong',$loaiphong);
    }
    function trangchu(){
    	$baidangnoibat = BaiDang::all();
    	$loaiphong = LoaiPhong::all();
    	return view('pages.trangchu',['baidangnoibat'=>$baidangnoibat,'loaiphong'=>$loaiphong]);
    }
}
