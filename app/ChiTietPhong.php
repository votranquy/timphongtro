<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ChiTietPhong extends Model
{	public $timestamps = false;    
    protected $table="rooms_detail";
    public function baidang(){
        return $this->belongsTo('App\BaiDang','post_id','id');
    }
}
