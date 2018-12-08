<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HanhDong extends Model
{
    protected $table="actions";
	public $timestamps = false;
    public function quyen(){
    	return $this->hasMany('App\Quyen','action_id','id');
    }

}
