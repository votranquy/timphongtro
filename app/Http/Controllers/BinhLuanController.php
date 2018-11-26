<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\BinhLuan;
use Illuminate\Support\Facades\Auth;//Thư viện hỗ trợ đăng nhập
use App\ThongBao;
use App\BaiDang;
class BinhLuanController extends Controller
{
    public function getXoa($id,$idBaiDang){
        $binhluan=BinhLuan::find($id);
        $binhluan->delete();
        return redirect('admin/baidang/xem/'.$idBaiDang)->with('thongbao','Xóa bình luận thành công');

    }
    public function postbinhluan(Request $request,$id){
    	//Phan binh luan
    	    $this->validate($request,
            [
                'description'=>'required|min:3|max:100', 
            ],[
                'description.required'=>'Bạn chưa nhập bình luận',
                'description.min'=>'Bình luận tối thiểu 3 kí tự',
                'description.max'=>'Bình luận tối đa 100 kí tự'

            ]);
		$binhluan = new BinhLuan;
        $binhluan->post_id=$id;
        $binhluan->user_id= Auth::user()->id;
        $binhluan->description=$request->description;
        $binhluan->save();
        //Tao thong bao
        //$thongbao = new ThongBao;
        $baidang=BaiDang::where('id',$id)->first();//Lay nguoi dang $baidang->user_id
        $comment=BinhLuan::select('user_id')->where('post_id','=',$id)->groupBy('user_id')->get();//Lay id cac user tung binh luan ve bai do truoc day $comment->user_id
        if($binhluan->user_id == $baidang->user_id){//Nguoi binh luan la chu tus
        	foreach($comment as $user){
        		if($user->user_id != $baidang->user_id){
        			$thongbao=new ThongBao;
        			$thongbao->comment_id=$binhluan->id;
        			$thongbao->post_id=$id;
        			$thongbao->user_id=$user->user_id;
        			$thongbao->isRead=0;
        			$thongbao->save();
        		}

        	}
        }
        else{//Nguoi binh luan la nguoi la
        	//Dam bao 2 dieu kien
        	//Nguoi da bl se nhan thong bao
        	//Nguoi bl se khong nhan thong bao
        	//Chu tus se nhan thong bao
        	$flagkt=0;
        	foreach($comment as $user){
        		// Co kiem tra co chu tus nhan thong bao chua
        		if($user->user_id != $binhluan->user_id){
        			$thongbao=new ThongBao;
        			$thongbao->comment_id=$binhluan->id;
        			$thongbao->post_id=$id;
        			$thongbao->user_id=$user->user_id;
        			$thongbao->isRead=0;
        			$thongbao->save();
        			if($user->user_id == $baidang->user_id){$flagkt=1;} ;
        		}
        	}
        	if($flagkt=0){
        		    $thongbao=new ThongBao;
        			$thongbao->comment_id=$binhluan->id;
        			$thongbao->post_id=$id;
        			$thongbao->user_id=$baidang->user_id;
        			$thongbao->isRead=0;
        			$thongbao->save();
        	}


        }
        return redirect("baidang/$id/")->with('thongbao','Thêm bình luận thành công');

    }
}
