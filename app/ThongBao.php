<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ThongBao extends Model
{
    //
    protected $table="notifications";
    public function binhluan(){
    	return $this->belongsTo('App\BinhLuan','comment_id','id');
    }
    public function user(){
    	return $this->belongsTo('App\User','user_id','id');
    }
}
