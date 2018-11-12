<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\TinTuc;
use App\TheLoai;
use App\LoaiTin;

class TinTucController extends Controller
{
   //
    public function getDanhSach(){
        $tintuc=TinTuc::orderBy('id','DESC')->get();
        return view('admin/tintuc/danhsach',['tintuc'=>$tintuc]);
    }

    public function getSua($id){
    }

    public function postSua(Request $request,$id){
    }

    public function getThem(){
        $theloai=TheLoai::all();
        $loaitin=LoaiTin::all();
        return view('admin.tintuc.them',['theloai'=>$theloai,'loaitin'=>$loaitin]);
    }

    public function postThem(Request $request){
        $this->validate($request, 
            [
                'LoaiTin'=>'required',
                'TieuDe'=>'required|min:3|unique:TinTuc,TieuDe', 
                'TomTat'=>'required',
                'NoiDung'=>'required'
            ],[
                'LoaiTin.required'=>'Bạn chưa chọn loại tin',
                'TieuDe.required'=>'Bạn chưa nhập tiêu đề',
                'TieuDe.min'=>'Tiêu đề tối thiểu 3 kí tự',
                'TieuDe.unique'=>'Tiêu đề đã tồn tại',
                'TomTat.required'=>'Bạn chưa nhập tóm tắt',
                'NoiDung.required'=>'Bạn chưa nhập nội dung'

            ]);
        $tintuc = new TinTuc;
        $tintuc->TieuDe=$request->TieuDe;
        $tintuc->TieuDeKhongDau=changeTitle($request->TieuDe);
        $tintuc->idLoaiTin=$request->LoaiTin;
        $tintuc->TomTat=$request->TomTat;
        $tintuc->NoiDung=$request->NoiDung;
        if($request->hasFile('Hinh')){
            $file=$request->file('Hinh');
            $duoi =$file->getClientOriginalExtension();
            if($duoi!='jpg' && $duoi!='png' && $duoi!='jpeg'){
                return redirect('admin/tintuc/them')->with('loi','Bạn chỉ được chọn ảnh jpg,png, jpeg');
            }
            $name = $file->getClientOriginalName();
            $Hinh =str_random(4)."_".$name;
            while(file_exists("upload/tintuc/".$Hinh)){
                $Hinh =str_random(4)."_".$name;
            }
            $file->move("upload/tintuc",$Hinh);
            $tintuc->Hinh=$Hinh;
        }
        else{
            $tintuc->Hinh="";
        }
        $tintuc->save();
        // echo "DONE";
        // $theloai=TheLoai::all();
        // $loaitin=LoaiTin::all();
        // return view('admin/tintuc/them',['theloai'=>$theloai,'loaitin'=>$loaitin]);
        return redirect('admin/tintuc/them')->with('thongbao','Bạn đã thêm tin tức thành công');
    }
    public function getXoa($id){

    }
}
