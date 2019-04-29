<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'first_name' => 'John',
            'last_name' => 'Bennett',
            'email' => 'subscriber1@orchestra.com',
            'password' => bcrypt('password'),
            'subscriber' => '1'
        ]);

        DB::table('users')->insert([
            'first_name' => 'Marco',
            'last_name' => 'Deluca',
            'email' => 'subscriber2@orchestra.com',
            'password' => bcrypt('password'),
            'subscriber' => '1'
        ]);

        DB::table('users')->insert([
            'first_name' => 'Rob',
            'last_name' => 'Haaf',
            'email' => 'subscriber3@orchestra.com',
            'password' => bcrypt('password'),
            'subscriber' => '1'
        ]);

        DB::table('users')->insert([
            'first_name' => 'Іван',
            'last_name' => 'Сірко',
            'email' => 'subscriber4@orchestra.com',
            'password' => bcrypt('password'),
            'subscriber' => '1'
        ]);

        DB::table('users')->insert([
            'first_name' => 'Богдан',
            'last_name' => 'Хмельницький',
            'email' => 'subscriber5@orchestra.com',
            'password' => bcrypt('password'),
            'subscriber' => '1'
        ]);

        DB::table('users')->insert([
            'first_name' => 'Joe',
            'last_name' => 'Kormendi',
            'email' => 'user1@orchestra.com',
            'password' => bcrypt('password')
        ]);

        DB::table('users')->insert([
            'first_name' => 'Deep',
            'last_name' => 'Panchal',
            'email' => 'user2@orchestra.com',
            'password' => bcrypt('password')
        ]);

        DB::table('users')->insert([
            'first_name' => 'Danielle',
            'last_name' => 'Butters',
            'email' => 'user3@orchestra.com',
            'password' => bcrypt('password')
        ]);
    }
}
