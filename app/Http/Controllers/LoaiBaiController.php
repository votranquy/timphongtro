<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\LoaiBai;
class LoaiBaiController extends Controller
{
    public function getDanhSach(){
    	$loaibai = LoaiBai::all();
    	return view('admin.loaibai.danhsach',['loaibai'=>$loaibai]);
    }
    public function getThem(){
        return view('admin.loaibai.them');
    }
    public function postThem(Request $request){
        //echo $request->Ten;
        $this->validate($request,
            [
                'name'=>'required|min:3|max:100|unique:post_type',
                'description'=>'required'
            ],
            [
                'name.required'=>'Bạn chưa nhập tên loại bài',
                'name.min'=> 'Tên loại bài đăng phải có độ dài tối thiểu 3 kí tự', 
                'name.max'=> 'Tên loại bài đăng có độ dài tối đa 100 kí tự',
                'name.unique'=>'Tên loại bài đăng đã tồn tại',
                'description.required'=>'Bạn chưa nhập mô tả cho bài đăng'
            ]
        );
        $loaibai = new LoaiBai;
        $loaibai->name=$request->name;
        $loaibai->description= $request->description;;
        //echo $theloai->TenKhongDau;
        $loaibai->save();

        return redirect('admin/loaibai/them')->with('thongbao','Thêm thành công');
    }
}
