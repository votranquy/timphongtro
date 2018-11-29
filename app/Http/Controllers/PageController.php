<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;//Thư viện hỗ trợ đăng nhập
use Illuminate\Http\Request;
use App\BaiDang;
use App\LoaiPhong;
use App\Anh;
use App\ThongBao;
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
        // $chitietphong->longitute=$request->longitute;
        // $chitietphong->latitude=$request->latitude;
        $baidang->save();
        $chitietphong->post_id=$baidang->id;
        $chitietphong->save();
        if($request->hasFile('image')){
            //  foreach($request->file('image') as $image) {
            //     $anh = new Anh;
            //     $anh->post_id=$baidang->id;
            //     $file=$request->file('image');
            //     $duoi =$file->getClientOriginalExtension();
            //     if($duoi!='jpg' && $duoi!='png' && $duoi!='jpeg'){
            //         return redirect('dangbaichothue')->with('loi','Bạn chỉ được chọn ảnh jpg, png, jpeg');
            //     }
            //     $name = $file->getClientOriginalName();
            //     $TenHinh =str_random(4)."_".$name;
            //     while(file_exists("upload/tintuc/".$TenHinh)){
            //         $TenHinh =str_random(4)."_".$name;
            //     }
            //     $file->move("upload/tintuc",$TenHinh);
            //     $anh->path=$TenHinh;
            //     $anh->save();
            // }
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




