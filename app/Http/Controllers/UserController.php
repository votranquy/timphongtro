<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;//Thư viện hỗ trợ đăng nhập
use Illuminate\Http\Request;
use App\User;
use App\NhomTaiKhoan;
use App\BaiDang;
class UserController extends Controller
{
    //
    public function getDanhSach(){
        $user = User::all();
        return view('admin.user.danhsach',['user'=>$user]);
    }

    public function getSua($id){
        $user=User::find($id);
    	return view('admin.user.sua',['user'=>$user]);
    }

    public function getThem(){
    	return view('admin.user.them');
    }
    public function postThem(Request $request){
        $this->validate($request,
            [
                'username'=>'required|min:3|max:100|unique:users',
                'password'=>'required'
            ],
            [
                'username.required'=>'Bạn chưa username',
                'username.min'=> 'Username phải có độ dài tối thiểu 3 kí tự',
                'username.max'=> 'Username có độ dài tối đa 100 kí tự',
                'username.unique'=>'Username đã tồn tại',
                'password.required'=>'Bạn chưa nhập password'
            ]
        );
        $users = new User;
        $users->username=$request->username;
        $users->password= bcrypt($request->password);
        $users->name= $request->name;
        $users->address= $request->address;
        $users->phone= $request->phone;
        $users->email= $request->email;
        //Xu ly anh
        if($request->hasFile('Hinh')){
            $file=$request->file('Hinh');
            $duoi =$file->getClientOriginalExtension();
            if($duoi!='jpg' && $duoi!='JPG' && $duoi!='png' && $duoi!='PNG'&& $duoi!='jpeg' && $duoi!='JPGE'){
                return redirect('admin/user/them')->with('loi','Bạn chỉ được chọn ảnh jpg, png, jpeg');
            }
            $name = $file->getClientOriginalName();
            $TenHinh =str_random(4)."_".$name;
            while(file_exists("storage/tintuc/".$TenHinh)){
                $TenHinh =str_random(4)."_".$name;
            }
            $file->move("storage/tintuc",$TenHinh);
            $users->image=$TenHinh;
        }
        else{
            $users->image="";
        }
        //Ket thuc
        $users->save();
        $nhomtaikhoan=new NhomTaiKhoan;
        $nhomtaikhoan->user_id=$users->id;
        $nhomtaikhoan->group_id=$request->group;
        $nhomtaikhoan->save();
        return redirect('admin/user/danhsach')->with('thongbao','Thêm thành công');
    }
    public function getXoa($id){
        $users=User::find($id);
        $users->delete();
        return redirect('admin/user/danhsach')->with('thongbao','Bạn đã xóa thành công');
    }
    //Xem thông tin cá nhân
    public function getView($id){
        $user = User::find($id);
        return view('admin.profile.view',['user'=>$user]);
    }
    //Xem trang cá nhân một user
    public function getXem($id){
        $user = User::find($id);
        $baidang = BaiDang::where('user_id',$id)->get();
        return view('admin.user.xem',['user'=>$user,'baidang'=>$baidang]);
    }

    public function getdangnhapAdmin(){
        return view('admin.login');
    }
    public function postdangnhapAdmin(Request $request){
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
            return redirect('admin/baidang/danhsach');
        }
        else{
            return redirect('admin/dangnhap')->with('thongbao','Sai tài khoản hoặc mật khẩu');
        }
    }
    public function getDangXuatAdmin(){
        Auth::logout();
        return redirect('admin/dangnhap');
    }
}
