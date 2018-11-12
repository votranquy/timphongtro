<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoaiBaiController extends Controller
{
    public function getDanhSach(){
    	$loaibai = LoaiBai::all();
    	return view('admin.loaibai.danhsach',['loaibai'=>$loaibai]);
    }
}
