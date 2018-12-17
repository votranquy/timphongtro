<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        //$this->call(UsersTableSeeder::class);
        $this->call(actions::class);
        $this->call(comments::class);
        $this->call(gallerys::class);
        $this->call(group_of_account::class);
        $this->call(groups::class);
        $this->call(notifications::class);
        $this->call(permission::class);
        $this->call(post_type::class);
        $this->call(posts::class);
        $this->call(room_type::class);
        $this->call(rooms_detail::class);
        $this->call(users::class);
    }
}
