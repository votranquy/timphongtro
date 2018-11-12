<?php

use Illuminate\Database\Seeder;

class post_type extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	DB::table('post_type')->insert([
        	['id'=>'1','name'=>'Đăng tìm trọ','description'=>'Đăng để tìm trọ'],
        	['id'=>'2','name'=>'Đăng cho thuê','descriptoin'=>'Đăng cho thuê trọ']

    	]);
    }
}
