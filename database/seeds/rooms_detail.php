<?php

use Illuminate\Database\Seeder;

class rooms_detail extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	DB::table('rooms_detail')->insert([
        	['id'=>'1','post_id' => '1','aceage'=>NULL,'minAceage' => '15','maxAceage' => '20','description'=>'Cần tìm trọ gấp, muốn phòng gần đại học BK, an ninh tốt, chủ trọ vui tính','longitute'=>'','latitude'=>''],
        	['id'=>'2','post_id' => '2','aceage'=>'30','minAceage' => NULL,'maxAceage' => NULL,'description'=>'Câng cho thuê phòng đường Ngô Thì Nhậm có thể ở từ 2-4 người, vệ sinh tốt, anh ninh đảm bảo','longitute'=>'16.069847','latitude'=>'108.151994']
    	]);
    }
}
