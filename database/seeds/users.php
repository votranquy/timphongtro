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
        	['id'=>'1','username' => 'admin','password' =>bcrypt('admin') ,'name' => 'Le Admin1q','address'=>'44 Hàm Nghi, Đà Nẵng','phone'=>'1234567899','image'=>'','email'=>'admin@admina','created_at'=>NULL,'updated_at'=>NULL],
        	['id'=>'2','username' => 'mod','password' => bcrypt('mod'),'name' => 'Le B','address'=>'45 Hàm Nghi, Đà Nẵng','phone'=>'122344','image'=>'','email'=>'levanec@gmaul.com','created_at'=>NULL,'updated_at'=>NULL],
        	 ['id'=>'3','username' => 'user','password' => bcrypt('user'),'name' => 'Le C','address'=>'44 Hàm Nghi','phone'=>'122344','image'=>'','email'=>'levaneD@gmaul.com','created_at'=>NULL,'updated_at'=>NULL]
    	]);

    }
}
