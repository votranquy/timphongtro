<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;//Thư viện hỗ trợ đăng nhập
use Illuminate\Http\Request;
use App\BaiDang;
use App\LoaiPhong;
use App\Anh;
use App\ThongBao;
use App\BinhLuan;
use Validator;
use App\User;
use App\NhomTaiKhoan;
use App\ChiTietPhong;
class PageController extends Controller
{
    function __construct(){
    	$baichinhchu = BaiDang::where('post_type_id',2)->take(4)->get();
    	$baimoi = BaiDang::where('post_type_id',2)->orderBy('created_at', 'desc')->take(5)->get();
        $loaiphong=LoaiPhong::all();
        $baicanthue=BaiDang::where('post_type_id',1)->orderBy('created_at', 'desc')->take(5)->get();
        $demthongbao=ThongBao::where('isRead',0)->get();
    	view()->share('baichinhchu',$baichinhchu);
    	view()->share('baimoi',$baimoi);
        view()->share('loaiphong',$loaiphong);
        view()->share('demthongbao',$demthongbao);
        view()->share('baicanthue',$baicanthue);
    }
    function trangchu(){
    	$baidangnoibat = BaiDang::where('post_type_id',2)->take(4)->get();
    	return view('pages.trangchu',['baidangnoibat'=>$baidangnoibat]);
    }
    public function danganh(){
        return view('pages.dangnhieuanh');
    }
    public function getMap(){
        return view('pages.map');
    }
    public function getBaiDang($id){
        $baidang=BaiDang::find($id);
        $anh= Anh::where('post_id',$id)->get();
        return view('pages.baidang',['baidang'=>$baidang,'anh'=>$anh]);
    }
    public function getthongbao(){
        $id=Auth::user()->id;
        $thongbao= ThongBao::where('user_id',$id)->get();
        return view('pages.thongbao',['thongbao'=>$thongbao]);
    }
    public function getdangbaicanthue(){
        return  view('pages.dangbaicanthue');
    }
    public function getquanlytinchothue(){
        $baidang= BaiDang::where('user_id',Auth::id())->where('post_type_id',2)->get();
        return view('pages.quanlytinchothue',['baidang'=>$baidang]);
    }
    public function postxemthongbao($idbaiviet,$idthongbao){
        $thongbao= ThongBao::find($idthongbao);
        $thongbao->isRead=1;
        $thongbao->save();
        return redirect('baidang/'.$idbaiviet);
    }
    public function getxoabaidang($idbaiviet,$idquanly){
        $baidang=BaiDang::find($idbaiviet);
        $anh = Anh::where('post_id',$idbaiviet);
        $chitietphong = ChiTietPhong::where('post_id',$idbaiviet);
        $binhluan = BinhLuan::where('post_id',$idbaiviet);
        $anh->delete();
        $binhluan->delete();
        $chitietphong->delete();
        $baidang->delete();
        if($idquanly == 1){
            return redirect('quanlytincanthue')->with('thongbao','Bạn đã xóa thành công');
        }
        else{
            return redirect('quanlytinchothue')->with('thongbao','Bạn đã xóa thành công');
        }

    }
    public function getquanlytincanthue(){
        $baidang= BaiDang::where('user_id',Auth::id())->where('post_type_id',1)->get();
        return view('pages.quanlytincanthue',['baidang'=>$baidang]);
    }
    public function postdangbaicanthue(Request $request,$id){
        $this->validate($request,
            [
                'title'=>'required|min:10|max:100',
                'roomtype'=>'required',
                'description'=>'required',
                'minprice'=>'required',
                'maxprice'=>'required',
                'minaceage'=>'required',
                'maxaceage'=>'required'
                ],[
                'title.required'=>'Bạn chưa nhập tiêu đề',
                'title.min'=>'Tiêu đề tối thiểu 10 kí tự',
                'title.max'=>'Tiêu đề tối đa 100 kí tự',
                'roomtype.required'=>'Bạn chưa chọn loại nhà',
                'description.required'=>'Bạn chưa nhập mô tả',
                'minprice.required'=>'Bạn chưa nhập giá',
                'maxprice.required'=>'Bạn chưa nhập giá',
                'minaceage.required'=>'Bạn chưa nhập diện tích',
                'maxaceage.required'=>'Bạn chưa nhập diện tích'

            ]);
        $baidang = new BaiDang;
        $baidang->post_type_id=$id;
        $baidang->room_type_id=$request->roomtype;
        $baidang->user_id=Auth::id();
        $baidang->title=$request->title;
        $baidang->phone=$request->phone;
        $baidang->minPrice=$request->minprice;
        $baidang->maxPrice=$request->maxprice;
        $baidang->price=NULL;
        $baidang->address=NULL;
        $baidang->save();
        $chitietphong= new ChiTietPhong;
        $chitietphong->minAceage=$request->minaceage;
        $chitietphong->maxAceage=$request->maxaceage;
        $chitietphong->post_id=$baidang->id;
        $chitietphong->description=$request->description;
        $chitietphong->longitute=NULL;
        $chitietphong->latitude=NULL;
        $chitietphong->aceage=NULL;
        $chitietphong->post_id=$baidang->id;
        $chitietphong->save();
        return redirect('dangbaicanthue')->with('thongbao','Bạn đã thêm bài đăng cần thuê thành công');
    }
    public function getdangbaichothue(){
        return  view('pages.dangbaichothue');
    }
    public function postdangbaichothue(Request $request,$id){
        $this->validate($request,
            [
                'title'=>'required|min:10|max:100',
                'roomtype'=>'required',
                'description'=>'required',
                'price'=>'required'
                ],[
                'title.required'=>'Bạn chưa nhập tiêu đề',
                'title.min'=>'Tiêu đề tối thiểu 10 kí tự',
                'title.max'=>'Tiêu đề tối đa 100 kí tự',
                'roomtype.required'=>'Bạn chưa chọn loại nhà',
                'description.required'=>'Bạn chưa nhập mô tả',
                'price.required'=>'Bạn chưa nhập giá'

            ]);
        $baidang = new BaiDang;
        $chitietphong= new ChiTietPhong;

        $baidang->post_type_id=$id;
        $baidang->room_type_id=$request->roomtype;
        $baidang->user_id=Auth::id();
        $baidang->title=$request->title;
        if($request->phone != ""){
            $baidang->phone=$request->phone;
        }
        else {
            $baidang->phone=NULL;
        }
        $chitietphong->post_id=$baidang->id;
        $chitietphong->description=$request->description;
        $baidang->price=$request->price;
        $baidang->minPrice=NULL;
        $baidang->maxPrice=NULL;
        $baidang->address=$request->address;
        $chitietphong->aceage=$request->aceage;
        $chitietphong->minAceage=NULL;
        $chitietphong->maxAceage=NULL;
        $baidang->save();
        $chitietphong->post_id=$baidang->id;
        $chitietphong->save();
        if($request->hasFile('image')){
            foreach($request->file('image') as $image) {
                $filenameWithExt = $image->getClientOriginalName();
                $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
                $extension = $image->getClientOriginalExtension();
                $fileNameToStore = $filename.'_'.time().'.'.$extension;
                $image->move("upload/tintuc", $fileNameToStore);
                $image = new Anh([
                    'post_id'=> $baidang->id,
                    'path' => $fileNameToStore,
                ]);
                $image->save();
            }
        }
        else{}
        return redirect('dangbaichothue')->with('thongbao','Bạn đã thêm bài đăng thành công');
    }
    public function getdangxuat(){
        Auth::logout();
        return redirect(\URL::previous());
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
    public function postdangky(Request $request){
        $this->validate($request,
            [
                'name'=>'required|min:3|max:100',
                'email'=>'required|email|unique:users',
                'password'=>'required|min:6', 
                're_password'=>'required|same:password',
            ],
            [
                'name.required'=>'Bạn chưa username',
                'name.min'=> 'Username phải có độ dài tối thiểu 6 kí tự',
                'name.max'=> 'Username có độ dài tối đa 100 kí tự',
                'email.required'=>'Bạn chưa username',
                'email.unique'=>'Email đã tồn tại',
                'email.email'=>'Bạn Enail nhập vào không hợp lệ',
                'password.required'=>'Bạn chưa nhập password',
                'password.min'=>'Password phải có độ dài tối thiểu 6 kí tự',
                're_password.required'=>'Bạn chưa nhập lại password',
                'password.same'=>'Bạn chưa nhập khớp password',
            ]
        );
        $users = new User;
        $users->username=$request->name;
        $users->password= bcrypt($request->password);
        $users->email= $request->email;
        $users->save();
        $nhomtaikhoan=new NhomTaiKhoan;
        $nhomtaikhoan->user_id=$users->id;
        $nhomtaikhoan->group_id=3;
        $nhomtaikhoan->save();
        return redirect('dangnhap')->with('thongbao','Chúc mừng bạn đăng ký thành công. Vui lòng đăng nhập để tiếp tục sử dụng dịch vụ.');
    }
    public function getdangnhap(){
        return view('pages.dangnhap');
    }
    public function getsua($id){
        $baidang=BaiDang::find($id);
        return view('pages.suabaidang',['baidang'=>$baidang]);
    }
    public function postsua($id, $idbaidang , Request $request){
        $this->validate($request,
            [
                'title'=>'required|min:10|max:100',
                'roomtype'=>'required',
                'description'=>'required',
                'price'=>'required'
                ],[
                'title.required'=>'Bạn chưa nhập tiêu đề',
                'title.min'=>'Tiêu đề tối thiểu 10 kí tự',
                'title.max'=>'Tiêu đề tối đa 100 kí tự',
                'roomtype.required'=>'Bạn chưa chọn loại nhà',
                'description.required'=>'Bạn chưa nhập mô tả',
                'price.required'=>'Bạn chưa nhập giá'

            ]);

        $baidang = BaiDang::find($idbaidang);
        // $baidang->post_type_id=$id;
        $baidang->room_type_id=$request->roomtype;
        $baidang->title=$request->title;
        if($request->phone != ""){
            $baidang->phone=$request->phone;
        }
        else {
            $baidang->phone=NULL;
        }


        $baidang->price=$request->price;
        $baidang->minPrice=NULL;
        $baidang->maxPrice=NULL;
        $baidang->address=$request->address;
        $baidang->save();

        $chitietphong=ChiTietPhong::where('post_id',$idbaidang)->first();
        $chitietphong->description=$request->description;
        $chitietphong->aceage=$request->aceage;
        $chitietphong->minAceage=NULL;
        $chitietphong->maxAceage=NULL;
        $chitietphong->save();
        if($request->hasFile('image')){
            // $anh = Anh::where('post_id',$idbaidang);
            //Lap lan 1 de them cac anh chua co
            foreach($request->file('image') as $image){//anh tu C
                $filenameWithExt = $image->getClientOriginalName();
                $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
                $extension = $image->getClientOriginalExtension();
                $fileNameToStore = $filename.$extension;//Tên file lấy từ C
                $kiemtra=0;//Mac dinh chua co trong DB
                foreach($baidang->anh as $anh){//Anh tu DB
                    if($fileNameToStore == $anh->path){
                        $kiemtra=1;//Co trong DB roi
                    }
                }
                if($kiemtra==0){//Chua co trong DB thi them
                    // $fileNameToStore = $filename.$extension;
                    $image->move("upload/tintuc", $fileNameToStore);
                    $image = new Anh([
                        'post_id'=> $idbaidang,
                        'path' => $fileNameToStore,
                    ]);
                    $image->save();
                }
                else{//Co trong DB thi bo qua
                }
            }
            // $anh = Anh::where('post_id',$idbaidang);
            //Lap lan 2 de xoa cac anh bi C xoa
            // foreach($baidang->anh as $anh){//Anh tu DB
            //     $idanh=$anh->id;
            //     foreach($request->file('image') as $image){//anh tu C
            //         $filenameWithExt = $image->getClientOriginalName();
            //         $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            //         $extension = $image->getClientOriginalExtension();
            //         $fileNameToStore = $filename.$extension;//Ten anh tu C
            //         $kiemtra=0;//Mac dinh la nen xoa
            //         if($anh->path == $fileNameToStore){
            //             $kiemtra=1;//Nguoi dung khong xoa anh do
            //         }
            //     }
            //     if($kiemtra==0){//Xoa
            //         $xoaanh = Anh::where('id', $idanh)->get();
            //         $xoaanh->delete();
            //     }
            //     else{//Khong xoa
            //     }
            // }
        }
        else{
            //Khong co anh nao tai len. Xoa tat ca anh trong DB
            // $anh = Anh::where('post_id',$idbaidang)->delete();
            // $anh->delete();
        }
        return redirect('sua/'.$idbaidang)->with('thongbao','Bạn đã sửa bài đăng thành công');
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
            return redirect('dangnhap')->with('baoloi','Sai tài khoản hoặc mật khẩu');
        }

        // $rules =[
        //     'email' => 'required|email',
        //     'password'=>'required|min:6'
        // ];
        // $messages =[
        //     'email.required'=>'Bạn chưa nhập email',
        //     'email.email'=>'Bạn nhập mail sai định dạng',
        //     'password.min'=>'Password tối thiểu 6 kí tự',
        //     'password.required'=>'Bạn chưa nhập password'
        // ];
        // $validator = Validator::make($request->all(),$rules,$messages);
        // if($validator->fails()){
        //     // return redirect()->back()->withErrors($validator)->withInput();
        //     return response()->json([
        //         'error'=>true,
        //         'message'=>$validator->errors()
        //     ],200);
        // }
        // else {
        //     if(Auth::attempt(['email'=>$request->email,'password'=>$request->password])){
        //         // return redirect('trangchu');
        //         return response()->json([
        //             'error'=>false,
        //             'message'=>'success'
        //         ],200);
        //     }
        //     else{
        //         $errors = new MessageBag(['errorlogin'=>'Email hoặc mật khẩu không đúng']);
        //         return response()->json([
        //             'error'=>true,
        //             'message'=>$errors
        //         ],200);
                // return redirect('dangnhap')->with('thongbao','Sai tài khoản hoặc mật khẩu');
            // }
        }
    }




