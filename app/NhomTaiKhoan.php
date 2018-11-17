<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NhomTaiKhoan extends Model
{
    protected $table="group_of_account";
    public function user(){
    	return $this->belongsTo('App\User','user_id','id');
    }
    public function nhom(){
    	return $this->belongsTo('App\Nhom','group_id','id');
    }
}
