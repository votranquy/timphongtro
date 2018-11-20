<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\LoaiBai;
use App\BaiDang;
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
    public function getSua($id){
    	$loaibai = LoaiBai::find($id);
    	return view('admin.loaibai.sua',['loaibai'=>$loaibai]);
    }
    public function postSua(Request $request,$id){
 		$loaibai=LoaiBai::find($id);
        $this->validate($request,
            [
                'name'=>'required|min:3|max:100|unique:post_type',
                'description'=>'required'
            ],
            [
                'name.required'=>'Bạn chưa nhập tên loại bài đăng',
                'name.min'=> 'Tên loại bài đăng phải có độ dài tối thiểu 3 kí tự',
                'name.max'=> 'Tên loại bài đăng có độ dài tối đa 100 kí tự',
                'name.unique'=>'Tên loại bài đăng đã tồn tại',
                'description.required'=>'Bạn chưa nhập mô tả cho loại bài đăng'
            ]
        );
        $loaibai->name=$request->name;
        $loaibai->description=$request->description;
        $loaibai->save();
        return redirect('admin/loaibai/sua/'.$id)->with('thongbao','Sửa thành công'); 
    }
    public function getXoa($id){
        $loaibai=LoaiBai::find($id);
        $loaibai->delete();
        return redirect('admin/loaibai/danhsach')->with('thongbao','Bạn đã xóa thành công');
    }
    public function getXem($id){
        $baidang=BaiDang::where('post_type_id',$id)->get();
        return view('admin.loaibai.xem',['baidang'=>$baidang]);
    }
}
