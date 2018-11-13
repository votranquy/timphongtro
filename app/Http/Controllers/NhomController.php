<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Nhom;
class NhomController extends Controller
{
    //
    public function getDanhSach(){
    	$nhom = Nhom::all();
    	return view('admin.nhom.danhsach',['nhom'=>$nhom]);
    }
    public function getThem(){
        return view('admin.nhom.them');
    }
    public function postThem(Request $request){
        //echo $request->Ten;
        $this->validate($request,
            [
                'name'=>'required|min:3|max:100|unique:groups',
                'description'=>'required'
            ],
            [
                'name.required'=>'Bạn chưa nhập tên nhóm',
                'name.min'=> 'Tên nhóm có độ dài tối thiểu 3 kí tự',
                'name.max'=> 'Tên nhóm có độ dài tối đa 100 kí tự',
                'name.unique'=>'Tên nhóm đã tồn tại',
                'description.required'=>'Bạn chưa nhập mô tả cho nhóm'
            ]
        );
        $nhom = new Nhom;
        $nhom->name=$request->name;
        $nhom->description= $request->description;;
        //echo $theloai->TenKhongDau;
        $nhom->save();

        return redirect('admin/nhom/them')->with('thongbao','Thêm thành công');
    }
    public function getSua($id){
    	$nhom = Nhom::find($id);
    	return view('admin.nhom.sua',['nhom'=>$nhom]);
    }
    public function postSua(Request $request,$id){
 		$nhom=Nhom::find($id);
        $this->validate($request,
            [
                'name'=>'required|min:3|max:100|unique:groups',
                'description'=>'required'
            ],
            [
                'name.required'=>'Bạn chưa nhập tên nhóm',
                'name.min'=> 'Tên nhóm phải có độ dài tối thiểu 3 kí tự',
                'name.max'=> 'Tên nhóm có độ dài tối đa 100 kí tự',
                'name.unique'=>'Tên nhóm đã tồn tại',
                'description.required'=>'Bạn chưa nhập mô tả cho nhóm'
            ]
        );
        $nhom->name=$request->name;
        $nhom->description=$request->description;
        $nhom->save();
        return redirect('admin/nhom/sua/'.$id)->with('thongbao','Sửa thành công');
    }
    public function getXoa($id){
        $nhom=Nhom::find($id);
        $nhom->delete();
        return redirect('admin/nhom/danhsach')->with('thongbao','Bạn đã xóa thành công');
    }
}
