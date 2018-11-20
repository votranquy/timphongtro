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
        $loaibai = LoaiBai::all();
        $loaiphong=LoaiPhong::all();
        return view('admin.baidang.them',['loaibai'=>$loaibai,'loaiphong'=>$loaiphong]);
    }

    public function postThem(Request $request){
        $this->validate($request,
            [
                'posttype'=>'required',
                'title'=>'required|min:3|max:100',
                'roomtype'=>'required',
                'description'=>'required',
            ],[
                'posttype.required'=>'Bạn chưa chọn loại bài đăng',
                'title.required'=>'Bạn chưa nhập tiêu đề',
                'title.min'=>'Tiêu đề tối thiểu 3 kí tự',
                'title.max'=>'Tiêu đề tối đa 100 kí tự',
                'roomtype.required'=>'Bạn chưa chọn loại nhà',
                'description.required'=>'Bạn chưa nhập mô tả'

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
            $TenHinh =str_random(4)."_".$name;
            while(file_exists("upload/tintuc/".$TenHinh)){
                $TenHinh =str_random(4)."_".$name;
            }
            $file->move("upload/tintuc",$TenHinh);
            $tintuc->Hinh=$TenHinh;
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
}
