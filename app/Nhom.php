<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Nhom extends Model
{
    //
    public $timestamps = false;
    protected $table="groups";
    public function nhomtaikhoan(){
    	return $this->hasMany('App\NhomTaiKhoan','group_id','id');
    }
    public function user(){
    	return $this->hasManyThrough('App\User','App\NhomTaiKhoan',
    		'group_id','user_id','id');
    }
}

