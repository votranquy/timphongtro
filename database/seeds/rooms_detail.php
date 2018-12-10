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
        	['id'=>'1','post_id' => '1','aceage' => '1','minAceage'=>NULL,'maxAceage'=>NULL,'description'=>NULL,'longitute'=>'300000','latitude'=>'1500000','created_at'=>NOW(),'updated_at'=>NOW()]
    	]);
    }
}
