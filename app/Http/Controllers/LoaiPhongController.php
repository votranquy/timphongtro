<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\LoaiPhong;
use App\BaiDang;
class LoaiPhongController extends Controller
{

    public function getDanhSach(){
    	$loaiphong = LoaiPhong::all();
    	return view('admin.loaiphong.danhsach',['loaiphong'=>$loaiphong]);
    }
    public function getSua($id){
    	$loaiphong = LoaiPhong::find($id);
    	return view('admin.loaiphong.sua',['loaiphong'=>$loaiphong]);
    }

    public function postSua(Request $request,$id){
 		$loaiphong=LoaiPhong::find($id);
        $this->validate($request,
            [
                'name'=>'required|min:3|max:100|unique:room_type',
                'description'=>'required'
            ],
            [
                'name.required'=>'Bạn chưa nhập tên loại phòng',
                'name.min'=> 'Tên loại phòng phải có độ dài tối thiểu 3 kí tự', 
                'name.max'=> 'Tên loại phòng phải có độ dài tối đa 100 kí tự',
                'name.unique'=>'Tên thể loại phòng đã tồn tại',
                'description.required'=>'Bạn chưa nhập mô tả loại phòng'
            ]
        );
        $loaiphong->name=$request->name;
        $loaiphong->description=$request->description;
        $loaiphong->save();
        return redirect('admin/loaiphong/sua/'.$id)->with('thongbao','Sửa thành công'); 
    }

    public function getThem(){
        return view('admin.loaiphong.them');
    }
    public function postThem(Request $request){
        //echo $request->Ten;
        $this->validate($request,
            [
                'name'=>'required|min:3|max:100|unique:room_type',
                'description'=>'required'
            ],
            [
                'name.required'=>'Bạn chưa nhập tên loại phòng',
                'name.min'=> 'Tên loại phòng phải có độ dài tối thiểu 3 kí tự', 
                'name.max'=> 'Tên loại phòng phải có độ dài tối đa 100 kí tự',
                'name.unique'=>'Tên thể loại phòng đã tồn tại',
                'description.required'=>'Bạn chưa nhập mô tả loại phòng'
            ]
        );
        $loaiphong = new LoaiPhong;
        $loaiphong->name=$request->name;
        $loaiphong->description= $request->description;;
        //echo $theloai->TenKhongDau;
        $loaiphong->save();

        return redirect('admin/loaiphong/them')->with('thongbao','Thêm thành công');
    }
    public function getXoa($id){
        $loaiphong=LoaiPhong::find($id);
        $loaiphong->delete();
        return redirect('admin/loaiphong/danhsach')->with('thongbao','Bạn đã xóa thành công');
    }
    public function getXem($id){
        $baidang=BaiDang::where('room_type_id',$id)->get();
        return view('admin.loaiphong.xem',['baidang'=>$baidang]);
    }
}
