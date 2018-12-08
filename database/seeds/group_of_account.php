<?php

use Illuminate\Database\Seeder;

class group_of_account extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('group_of_account')->insert([
        	['id' => '1','user_id'=>'1','group_id'=>'1'],
        	['id' => '2','user_id'=>'2','group_id'=>'2'],
        	['id' => '3','user_id'=>'3','group_id'=>'3']
        ]);
    }
}
