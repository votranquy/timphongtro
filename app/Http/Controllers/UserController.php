<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
}
