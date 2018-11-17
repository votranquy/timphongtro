<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Anh extends Model
{
	
    protected $table="gallerys";
    public function baidang(){
        return $this->belongsTo('App\BaiDang','post_id','id');
    }
}
