<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Nhom;
class NhomController extends Controller
{
    //
    public function getDanhSach(){
    	$nhom = Nhom::all();
    	return view('admin.nhom.danhsach',['nhom'=>$nhom]);
    }
}
