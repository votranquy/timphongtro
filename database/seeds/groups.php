<?php

use Illuminate\Database\Seeder;

class groups extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	DB::table('groups')->insert([
        	['id'=>'1','name' => 'Admin','description' => 'Quản trị viên hệ thống. Có toàn quyền truy cập'],
        	['id'=>'2','name' => 'Mod','description' => 'Quản trị viên hệ thống. Được quyền quản lý bài viết và các user.'],
        	['id'=>'3','name' => 'User','description' => 'Người dùng. Có quyền đăng bài và một số quyền khác.']
    	]);
    }
}
