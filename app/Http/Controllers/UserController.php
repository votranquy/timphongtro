<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Users;
class UserController extends Controller
{
    //
    public function getDanhSach(){
        $user = Users::all();
        return view('admin.user.danhsach',['user'=>$user]);
    }

    public function getSua(){
    	return view('admin.user.sua');
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
        $users = new Users;
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
            while(file_exists("upload/tintuc/".$TenHinh)){
                $TenHinh =str_random(4)."_".$name;
            }
            $file->move("upload/tintuc",$TenHinh);
            $users->image=$TenHinh;
        }
        else{
            $users->image="";
        }
        //Ket thuc
        $users->save();
        return redirect('admin/user/danhsach')->with('thongbao','Thêm thành công');
    }
}
