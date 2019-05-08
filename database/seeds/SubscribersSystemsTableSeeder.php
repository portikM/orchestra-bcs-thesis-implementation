<?php

use Illuminate\Database\Seeder;

class SubscribersSystemsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('subscribers_systems')->insert([
            'subscriber_id' => '1',
            'system_id' => '1',
            'system_state' => '1'
        ]);

        DB::table('subscribers_systems')->insert([
            'subscriber_id' => '1',
            'system_id' => '2',
            'system_state' => '0'
        ]);

        DB::table('subscribers_systems')->insert([
            'subscriber_id' => '1',
            'system_id' => '7',
            'system_state' => '1'
        ]);

        DB::table('subscribers_systems')->insert([
            'subscriber_id' => '1',
            'system_id' => '8',
            'system_state' => '0'
        ]);

        DB::table('subscribers_systems')->insert([
            'subscriber_id' => '2',
            'system_id' => '2',
            'system_state' => '1'
        ]);

        DB::table('subscribers_systems')->insert([
            'subscriber_id' => '2',
            'system_id' => '3',
            'system_state' => '1'
        ]);

        DB::table('subscribers_systems')->insert([
            'subscriber_id' => '2',
            'system_id' => '4',
            'system_state' => '0'
        ]);

        DB::table('subscribers_systems')->insert([
            'subscriber_id' => '2',
            'system_id' => '5',
            'system_state' => '1'
        ]);

        DB::table('subscribers_systems')->insert([
            'subscriber_id' => '2',
            'system_id' => '7',
            'system_state' => '1'
        ]);

        DB::table('subscribers_systems')->insert([
            'subscriber_id' => '2',
            'system_id' => '8',
            'system_state' => '1'
        ]);

        DB::table('subscribers_systems')->insert([
            'subscriber_id' => '2',
            'system_id' => '9',
            'system_state' => '0'
        ]);

        DB::table('subscribers_systems')->insert([
            'subscriber_id' => '3',
            'system_id' => '5',
            'system_state' => '1'
        ]);

        DB::table('subscribers_systems')->insert([
            'subscriber_id' => '3',
            'system_id' => '6',
            'system_state' => '1'
        ]);

        DB::table('subscribers_systems')->insert([
            'subscriber_id' => '3',
            'system_id' => '9',
            'system_state' => '1'
        ]);

        DB::table('subscribers_systems')->insert([
            'subscriber_id' => '4',
            'system_id' => '2',
            'system_state' => '1'
        ]);

        DB::table('subscribers_systems')->insert([
            'subscriber_id' => '3',
            'system_id' => '1',
            'system_state' => '1'
        ]);

        DB::table('subscribers_systems')->insert([
            'subscriber_id' => '4',
            'system_id' => '5',
            'system_state' => '1'
        ]);

        DB::table('subscribers_systems')->insert([
            'subscriber_id' => '4',
            'system_id' => '8',
            'system_state' => '1'
        ]);

        DB::table('subscribers_systems')->insert([
            'subscriber_id' => '4',
            'system_id' => '9',
            'system_state' => '1'
        ]);

        DB::table('subscribers_systems')->insert([
            'subscriber_id' => '5',
            'system_id' => '2',
            'system_state' => '1'
        ]);

        DB::table('subscribers_systems')->insert([
            'subscriber_id' => '5',
            'system_id' => '3',
            'system_state' => '1'
        ]);

        DB::table('subscribers_systems')->insert([
            'subscriber_id' => '5',
            'system_id' => '6',
            'system_state' => '1'
        ]);
    }
}
