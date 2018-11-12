<?php

use Illuminate\Database\Seeder;

class notifications extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('notifications')->insert([
        	['id' => '28','comment_id'=>'28','user_id'=>'11','post_id'=>'9','isRead'=>'0'],
        	['id' => '29','comment_id'=>'29','user_id'=>'4','post_id'=>'3','isRead'=>'0'],
        	['id' => '30','comment_id'=>'29','user_id'=>'11','post_id'=>'9','isRead'=>'0'],
        ]);
    }
}
