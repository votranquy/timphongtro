<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\BaiDang;
use App\Anh;
use App\BinhLuan;
use App\ChiTietPhong;
use App\loaiBai;
use App\LoaiPhong;

class BaiDangController extends Controller
{
   //
    public function getDanhSach(){
    	$baidang = BaiDang::all();
    	return view('admin.baidang.danhsach',['baidang'=>$baidang]);

    }
    public function getXem($id){
        $baidang = BaiDang::find($id);
        return view('admin.baidang.xem',['baidang'=>$baidang]);
    }    

    public function getSua($id){
    }

    public function postSua(Request $request,$id){
    }

    public function getThem(){

    }

    public function postThem(Request $request){
    }
    public function getXoa($id){

    }
}
