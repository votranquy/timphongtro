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
        $users->password= $request->password;
        $users->name= $request->name;
        $users->address= $request->address;
        $users->phone= $request->phone;
        $users->email= $request->email;
        if($request->hasFile('image')){
            $file=$request->file('image');
            $duoi =$file->getClientOriginalExtension();
            if($duoi!='jpg' && $duoi!='png' && $duoi!='jpeg'){
                return redirect('admin/user/them')->with('loi','Bạn chỉ được chọn ảnh jpg,png, jpeg');
            }
            $name = $file->getClientOriginalName();
            $Hinh =str_random(4)."_".$name;
            while(file_exists("upload/tintuc/".$Hinh)){
                $Hinh =str_random(4)."_".$name;
            }
            $file->move("upload/tintuc",$Hinh);
            $users->image=$Hinh;
        }
        else{
            $users->image="";
        }
        $users->save();

        return redirect('admin/user/them')->with('thongbao','Thêm thành công');
    }
}
