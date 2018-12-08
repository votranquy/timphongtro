<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Quyen extends Model
{
    protected $table="permission";
	public $timestamps = false;
    public function nhomtaikhoan(){
    	return $this->belongsTo('App\NhomTaiKhoan','group_id','id');
    }
    public function hanhdong(){
    	return $this->belongsTo('App\HanhDong','action_id','id');
    }

}
