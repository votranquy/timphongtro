<?php

use Illuminate\Database\Seeder;

class users extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	DB::table('users')->insert([
        	['id'=>'1','username' => 'admin','password' =>bcrypt('12345678') ,'name' => 'Le Admin1q','address'=>'44 Hàm Nghi, Đà Nẵng','phone'=>'1234567899','image'=>'','email'=>'admin@gmail.com'],
        	['id'=>'2','username' => 'mod','password' => bcrypt('12345678'),'name' => 'Le B','address'=>'45 Hàm Nghi, Đà Nẵng','phone'=>'122344','image'=>'','email'=>'mod@gmail.com'],
        	 ['id'=>'3','username' => 'user','password' => bcrypt('12345678'),'name' => 'Le C','address'=>'44 Hàm Nghi','phone'=>'122344','image'=>'','email'=>'user@gmail.com']
    	]);

    }
}
