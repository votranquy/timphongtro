<?php

namespace App;
use Illuminate\Database\Eloquent\Model;

class LoaiPhong extends Model
{
    //
    public $timestamps = false;    
    protected $table="room_type";
    public function baidang(){
    	return $this->hasMany('App\BaiDang','room_type_id','id');
    }
}