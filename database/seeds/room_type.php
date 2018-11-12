<?php

use Illuminate\Database\Seeder;

class room_type extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	DB::table('room_type')->insert([
        	['id'=>'1','name' => 'Phòng trọ','description'=>'Phòng trọ'],
        	['id'=>'2','name' => 'Nhà nguyên căn','description'=>'Nhà nguyên căn'],
        	['id'=>'3','name' => 'Mặt tiền kinh doanh','description'=>'Mặt tiền kinh doanh'],
        	['id'=>'4','name' => 'Khách sạn, nhà nghỉ','description'=>'Khách sạn, nhà nghỉ'],
        	['id'=>'5','name' => 'Chung cư','description'=>'Chung cư'],
    	]);
    }
}
