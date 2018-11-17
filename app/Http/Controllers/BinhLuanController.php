<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BinhLuanController extends Controller
{
    public function getXoa($id,$idBaiDang){
        $binhluan=BinhLuan::find($id);
        $binhluan->delete();
        return redirect('admin/baidang/xem/'.$idBaiDang)->with('thongbao','Xóa bình luận thành công');

    }
}
