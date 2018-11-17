<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;
    protected $table="users";
    public $timestamps = false;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
    public function binhluan(){
        return $this->hasMany('App\BinhLuan','user_id','id');
    }
    public function baidang(){
        return $this->hasMany('App\BaiDang','user_id','id');
    }
    public function nhomtaikhoan(){
        return $this->hasOne('App\NhomTaiKhoan','user_id','id');
    }
}
