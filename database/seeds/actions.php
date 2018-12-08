<?php

use Illuminate\Database\Seeder;

class actions extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	DB::table('actions')->insert([
        	['id'=>'1','name' => 'VIEW_POST','description' => 'Xem một bài đăng trên trang admin'],
        	['id'=>'2','name' => 'EDIT_POST','description' => 'Sửa một bài đăng trên trang admin'],
        	['id'=>'3','name' => 'DELETE_POST','description' => 'Xóa bài đăng trên trang admin'],
        	['id'=>'4','name' => 'VIEW_USER','description' => 'Xem user trên trang admin'],
        	['id'=>'5','name' => 'EDIT_USER','description' => 'Chỉnh sửa quyền một user trên trang admin'],
        	['id'=>'6','name' => 'DELETE_USER','description' => 'Xóa một user trên trang admin'],
        	['id'=>'7','name' => 'VIEW_ROOMTYPE','description' => 'Xem một loại phòng trên trang admin'],
        	['id'=>'8','name' => 'EDIT_ROOMTYPE','description' => 'Sửa một loại phòng trên trang admin'],
        	['id'=>'9','name' => 'DELETE_ROOMTYPE','description' => 'Xóa một loại phòng trên trang admin'],
        	['id'=>'10','name' => 'VIEW_POSTTYPE','description' => 'Xem một loại bài trên trang admin'],
        	['id'=>'11','name' => 'EDIT_POSTTYPE','description' => 'Sửa một loại bài trên trang admin'],
        	['id'=>'12','name' => 'DELETE_POSTTYPE','description' => 'Xóa một loại bài trên trang admin'],
        	['id'=>'13','name' => 'VIEW_GROUP','description' => 'Xem một Group trên trang admin'],
        	['id'=>'14','name' => 'EDIT_GROUP','description' => 'Sửa một Group trên trang admin'],
        	['id'=>'15','name' => 'DELETE_GROUP','description' => 'Xóa một Group trên trang admin'],
    	]);
    }
}
