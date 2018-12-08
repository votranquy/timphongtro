<?php

use Illuminate\Database\Seeder;

class permission extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	DB::table('permission')->insert([
    		//ADMIN
    		//POST
        	['id'=>'1','group_id' => '1','action_id' => '1','isAction'=>'1'],
        	['id'=>'2','group_id' => '1','action_id' => '2','isAction'=>'0'],
        	['id'=>'3','group_id' => '1','action_id' => '3','isAction'=>'1'],
        	//USER
        	['id'=>'4','group_id' => '1','action_id' => '4','isAction'=>'1'],
        	['id'=>'5','group_id' => '1','action_id' => '5','isAction'=>'1'],
        	['id'=>'6','group_id' => '1','action_id' => '6','isAction'=>'1'],
        	//ROOMTYPE
        	['id'=>'7','group_id' => '1','action_id' => '7','isAction'=>'1'],
        	['id'=>'8','group_id' => '1','action_id' => '8','isAction'=>'1'],
        	['id'=>'9','group_id' => '1','action_id' => '9','isAction'=>'1'],
        	//POSTTYPE
        	['id'=>'10','group_id' => '1','action_id' => '10','isAction'=>'1'],
        	['id'=>'11','group_id' => '1','action_id' => '11','isAction'=>'1'],
        	['id'=>'12','group_id' => '1','action_id' => '12','isAction'=>'1'],
        	//GROUP
        	['id'=>'13','group_id' => '1','action_id' => '13','isAction'=>'1'],
        	['id'=>'14','group_id' => '1','action_id' => '14','isAction'=>'1'],
        	['id'=>'15','group_id' => '1','action_id' => '15','isAction'=>'1'],

        	//MOD
    		//POST
        	['id'=>'16','group_id' => '2','action_id' => '1','isAction'=>'1'],
        	['id'=>'17','group_id' => '2','action_id' => '2','isAction'=>'0'],
        	['id'=>'18','group_id' => '2','action_id' => '3','isAction'=>'1'],
        	//USER
        	['id'=>'19','group_id' => '2','action_id' => '4','isAction'=>'1'],
        	['id'=>'20','group_id' => '2','action_id' => '5','isAction'=>'0'],
        	['id'=>'21','group_id' => '2','action_id' => '6','isAction'=>'1'],
        	//ROOMTYPE
        	['id'=>'22','group_id' => '2','action_id' => '7','isAction'=>'1'],
        	['id'=>'23','group_id' => '2','action_id' => '8','isAction'=>'0'],
        	['id'=>'24','group_id' => '2','action_id' => '9','isAction'=>'0'],
        	//POSTTYPE
        	['id'=>'25','group_id' => '2','action_id' => '10','isAction'=>'1'],
        	['id'=>'26','group_id' => '2','action_id' => '11','isAction'=>'0'],
        	['id'=>'27','group_id' => '2','action_id' => '12','isAction'=>'0'],
        	//GROUP
        	['id'=>'28','group_id' => '2','action_id' => '13','isAction'=>'1'],
        	['id'=>'29','group_id' => '2','action_id' => '14','isAction'=>'0'],
        	['id'=>'30','group_id' => '2','action_id' => '15','isAction'=>'0'],

        	//USER
    		//POST
        	['id'=>'31','group_id' => '3','action_id' => '1','isAction'=>'0'],
        	['id'=>'32','group_id' => '3','action_id' => '2','isAction'=>'0'],
        	['id'=>'33','group_id' => '3','action_id' => '3','isAction'=>'0'],
        	//USER
        	['id'=>'34','group_id' => '3','action_id' => '4','isAction'=>'0'],
        	['id'=>'35','group_id' => '3','action_id' => '5','isAction'=>'0'],
        	['id'=>'36','group_id' => '3','action_id' => '6','isAction'=>'0'],
        	//ROOMTYPE
        	['id'=>'37','group_id' => '3','action_id' => '7','isAction'=>'0'],
        	['id'=>'38','group_id' => '3','action_id' => '8','isAction'=>'0'],
        	['id'=>'39','group_id' => '3','action_id' => '9','isAction'=>'0'],
        	//POSTTYPE
        	['id'=>'40','group_id' => '3','action_id' => '10','isAction'=>'0'],
        	['id'=>'41','group_id' => '3','action_id' => '11','isAction'=>'0'],
        	['id'=>'42','group_id' => '3','action_id' => '12','isAction'=>'0'],
        	//GROUP
        	['id'=>'43','group_id' => '3','action_id' => '13','isAction'=>'0'],
        	['id'=>'44','group_id' => '3','action_id' => '14','isAction'=>'0'],
        	['id'=>'45','group_id' => '3','action_id' => '15','isAction'=>'0'],
    	]);
    }
}
