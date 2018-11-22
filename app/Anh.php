<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Anh extends Model
{
	public $timestamps = false;
    protected $table="gallerys";
    public function baidang(){
        return $this->belongsTo('App\BaiDang','post_id','id');
    }
}
