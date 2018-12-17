<?php

use Illuminate\Database\Seeder;

class posts extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	DB::table('posts')->insert([

        	['id'=>'1','post_type_id' => '2','room_type_id' => '1','user_id'=>'3','title'=>'','title'=>'Cho thue tro duong Ngo Thi Nham','price'=>'800000','minPrice'=>NULL,'maxPrice'=>NULL,'address'=>'55/3 Ngô Thì Nhậm','phone'=>'0123456789','created_at'=>NOW(),'updated_at'=>NOW()]
    	]);
    }
}
