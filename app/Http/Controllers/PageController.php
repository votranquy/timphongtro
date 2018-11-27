<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;//Thư viện hỗ trợ đăng nhập
use Illuminate\Http\Request;
use App\BaiDang;
use App\LoaiPhong;
use App\Anh;
use App\ThongBao;
class PageController extends Controller
{
    function __construct(){
    	$baichinhchu = BaiDang::where('post_type_id',2)->take(4)->get();
    	$baimoi = BaiDang::where('post_type_id',2)->orderBy('created_at', 'desc')->take(5)->get();
        $loaiphong=LoaiPhong::all();

        $demthongbao=ThongBao::where('isRead',0)->get();
    	view()->share('baichinhchu',$baichinhchu);
    	view()->share('baimoi',$baimoi);
        view()->share('loaiphong',$loaiphong);
        view()->share('demthongbao',$demthongbao);
    }
    function trangchu(){
    	$baidangnoibat = BaiDang::where('post_type_id',2)->take(4)->get();
    	return view('pages.trangchu',['baidangnoibat'=>$baidangnoibat]);
    }
    public function getBaiDang($id){
        $baidang=BaiDang::find($id);
        return view('pages.baidang',['baidang'=>$baidang]);
    }
    public function getLoaiPhong($id){
        $loaiphongchitiet=LoaiPhong::find($id);
        $baidang=BaiDang::where('room_type_id',$id)->paginate(5);
        return view('pages.loaiphong',['baidang'=>$baidang,'loaiphongchitiet'=>$loaiphongchitiet]);
    }
    public function getTrangnhap($id){

        return view('pages.trangnhap');
    }
    public function getdangky(){
        return view('pages.dangky');
    }
    public function getdangnhap(){
        return view('pages.dangnhap');
    }
    public function postdangnhap(Request $request){
            $this->validate($request,[
            'email'=>'required',
            'password'=>'required|min:3|max:32'
        ],[
            'email.required'=>'Bạn chưa nhập email',
            'password.required'=>'Bạn chưa nhập password',
            'password.min'=>'Password tối thiểu 3 kí tự',
            'password.max'=>'Password không được quá 32 kí tự'
        ]);
        if(Auth::attempt(['email'=>$request->email,'password'=>$request->password])){
            return redirect('trangchu');
        }
        else{
            return redirect('dangnhap')->with('thongbao','Sai tài khoản hoặc mật khẩu');
        }
    }
    function getdangxuat(){
        Auth::logout();
        return redirect('trangchu');
    }
    function getthongbao(){
        $id=Auth::user()->id;
        $thongbao= ThongBao::where('user_id',$id)->get();
        return view('pages.thongbao',['thongbao'=>$thongbao]);
    }

    function getdangbaichothue(){
        $loaiphong=LoaiPhong::all();
        return view('pages.dangbaichothue',['loaiphong'=>$loaiphong]);
    }
}
