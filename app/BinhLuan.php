<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BinhLuan extends Model
{
    protected $table="comments";
    public function baidang(){
        return $this->belongsTo('App\BaiDang','post_id','id');
    }
    public function user(){
        return $this->belongsTo('App\User','user_id','id');
    }
    public function thongbao(){
        return $this->hasMany('App\ThongBao','comment_id','id');
    }
}
