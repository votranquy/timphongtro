<?php

use Illuminate\Database\Seeder;

class comments extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	DB::table('comments')->insert([
        	['id' => '1','post_id' => '1','user_id' => '2','description'=>'Mình có phòng 25m2 nhưng giá thuê là 2M/ tháng','created_at'=>'2018-10-12 20:31:55','updated_at'=>'2018-10-12 20:31:55'],
        	['id' => '2','post_id' => '2','user_id' => '3','description'=>'Có ai thuê chưa bạn?','created_at'=>'2018-10-12 20:31:55','updated_at'=>'2018-10-12 20:31:55']
    	]);
    }
}
