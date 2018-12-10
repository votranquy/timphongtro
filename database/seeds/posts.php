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
    	// DB::table('posts')->insert([
     //    	['id'=>'1','post_type_id' => '1','room_type_id' => '1','user_id'=>'3','title'=>'','price'=>NULL,'minPrice'=>'300000','maxPrice'=>'1500000','address'=>'gần Bách khoa','phone'=>'12345678','created_at'=>NOW(),'updated_at'=>NOW()],
     //    	['id'=>'2','post_type_id' => '2','room_type_id' => '1','user_id'=>'3','title'=>'','price'=>'800000','minPrice'=>NULL,'maxPrice'=>NULL,'address'=>'55/3 Ngô Thì Nhậm','phone'=>'0123456789','created_at'=>NOW(),'updated_at'=>NOW()]
    	// ]);
    }
}
