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
}

