<?php

namespace App;
use Illuminate\Database\Eloquent\Model;

class BaiDang extends Model
{
    //
    // public $timestamps = false;
    protected $table="posts";
    public function binhluan(){
    	return $this->hasMany('App\BinhLuan','post_id','id');
    }
    public function anh(){
    	return $this->hasMany('App\Anh','post_id','id');
    }
    public function chitietphong(){
    	return $this->hasOne('App\ChiTietPhong','post_id','id');
    }
    public function loaibai(){
    	return $this->belongsTo('App\LoaiBai','post_type_id','id');
    }
    public function loaiphong(){
    	return $this->belongsTo('App\LoaiPhong','room_type_id','id');
    }
    public function user(){
        return $this->belongsTo('App\User','user_id','id');
    }

}
