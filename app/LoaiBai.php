<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LoaiBai extends Model
{
    //
    protected $table="post_type";
    public function baidang(){
    	return $this->hasMany('App\BaiDang','post_type_id','id');
    }

}
