<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;//Thư viện hỗ trợ đăng nhập
use Illuminate\Http\Request;
use App\BaiDang;
use App\Anh;
use App\BinhLuan;
use App\ChiTietPhong;
use App\LoaiBai;
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
        $anh= Anh::where('post_id',$id)->get();
        $binhluan=BinhLuan::where('post_id',$id)->get();
        return view('admin.baidang.xem',['baidang'=>$baidang,'anh'=>$anh,'binhluan'=>$binhluan]);
    }

    public function getSua($id){
    }

    public function postSua(Request $request,$id){
    }

    public function getThem(){
        $loaibai =  LoaiBai::all();
        $loaiphong = LoaiPhong::all();
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
        $baidang = new BaiDang;
        $chitietphong= new ChiTietPhong;

        $baidang->post_type_id=$request->posttype;
        $baidang->room_type_id=$request->roomtype;
        $baidang->user_id=Auth::id();
        $baidang->title=$request->title;
        $baidang->phone=$request->phone;
        $chitietphong->post_id=$baidang->id;
        $chitietphong->description=$request->description;
        if($request->posttype=="1"){//Tìm trọ
            $baidang->minPrice=$request->minprice;
            $baidang->maxPrice=$request->maxprice;
            $chitietphong->minAceage=$request->minaceage;
            $chitietphong->maxAceage=$request->maxaceage;
            $chitietphong->longitute=NULL;
            $chitietphong->latitude=NULL;
            $chitietphong->aceage=NULL;
            $baidang->price=NULL;
            $baidang->address=NULL;
            $baidang->save();
            $chitietphong->post_id=$baidang->id;
            $chitietphong->save();
        }
        else{//Cho thuê
            $baidang->price=$request->price;
            $baidang->minPrice=NULL;
            $baidang->maxPrice=NULL;
            $baidang->address=$request->address;
            $chitietphong->aceage=$request->aceage;
            $chitietphong->minAceage=NULL;
            $chitietphong->maxAceage=NULL;
            $chitietphong->longitute=$request->longitute;
            $chitietphong->latitude=$request->latitude;
            $baidang->save();
            $chitietphong->post_id=$baidang->id;
            $chitietphong->save();
            if($request->hasFile('Hinh')){
                $anh = new Anh;
                $anh->post_id=$baidang->id;
                $file=$request->file('Hinh');
                $duoi =$file->getClientOriginalExtension();
                if($duoi!='jpg' && $duoi!='png' && $duoi!='jpeg'){
                    return redirect('admin/baidang/them')->with('loi','Bạn chỉ được chọn ảnh jpg, png, jpeg');
                }
                $name = $file->getClientOriginalName();
                $TenHinh =str_random(4)."_".$name;
                while(file_exists("upload/tintuc/".$TenHinh)){
                    $TenHinh =str_random(4)."_".$name;
                }
                $file->move("upload/tintuc",$TenHinh);
                $anh->path=$TenHinh;
                $anh->save();
            }
            else{}
        }


        // echo "DONE";
        // $theloai=TheLoai::all();
        // $loaitin=LoaiTin::all();
        // return view('admin/tintuc/them',['theloai'=>$theloai,'loaitin'=>$loaitin]);
        return redirect('admin/baidang/them')->with('thongbao','Bạn đã thêm bài đăng thành công');
    }
    public function getXoa($id){
        $baidang=BaiDang::find($id);
        $anh = Anh::where('post_id',$id);
        $chitietphong = ChiTietPhong::where('post_id',$id);
        $binhluan = BinhLuan::where('post_id',$id);
        $anh->delete();
        $binhluan->delete();
        $chitietphong->delete();
        $baidang->delete();
        return redirect('admin/baidang/danhsach')->with('thongbao','Bạn đã xóa thành công');

    }
}
