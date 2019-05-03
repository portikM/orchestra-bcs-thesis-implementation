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
            'equipment_id' => '1'
        ]);

        DB::table('subscribers_systems')->insert([
            'subscriber_id' => '1',
            'equipment_id' => '2'
        ]);

        DB::table('subscribers_systems')->insert([
            'subscriber_id' => '1',
            'equipment_id' => '7'
        ]);

        DB::table('subscribers_systems')->insert([
            'subscriber_id' => '1',
            'equipment_id' => '8'
        ]);

        DB::table('subscribers_systems')->insert([
            'subscriber_id' => '2',
            'equipment_id' => '2'
        ]);

        DB::table('subscribers_systems')->insert([
            'subscriber_id' => '2',
            'equipment_id' => '3'
        ]);

        DB::table('subscribers_systems')->insert([
            'subscriber_id' => '2',
            'equipment_id' => '4'
        ]);

        DB::table('subscribers_systems')->insert([
            'subscriber_id' => '2',
            'equipment_id' => '5'
        ]);

        DB::table('subscribers_systems')->insert([
            'subscriber_id' => '2',
            'equipment_id' => '7'
        ]);

        DB::table('subscribers_systems')->insert([
            'subscriber_id' => '2',
            'equipment_id' => '8'
        ]);

        DB::table('subscribers_systems')->insert([
            'subscriber_id' => '2',
            'equipment_id' => '9'
        ]);

        DB::table('subscribers_systems')->insert([
            'subscriber_id' => '3',
            'equipment_id' => '5'
        ]);

        DB::table('subscribers_systems')->insert([
            'subscriber_id' => '3',
            'equipment_id' => '6'
        ]);

        DB::table('subscribers_systems')->insert([
            'subscriber_id' => '3',
            'equipment_id' => '9'
        ]);

        DB::table('subscribers_systems')->insert([
            'subscriber_id' => '4',
            'equipment_id' => '2'
        ]);

        DB::table('subscribers_systems')->insert([
            'subscriber_id' => '3',
            'equipment_id' => '1'
        ]);

        DB::table('subscribers_systems')->insert([
            'subscriber_id' => '4',
            'equipment_id' => '5'
        ]);

        DB::table('subscribers_systems')->insert([
            'subscriber_id' => '4',
            'equipment_id' => '8'
        ]);

        DB::table('subscribers_systems')->insert([
            'subscriber_id' => '4',
            'equipment_id' => '9'
        ]);

        DB::table('subscribers_systems')->insert([
            'subscriber_id' => '5',
            'equipment_id' => '2'
        ]);

        DB::table('subscribers_systems')->insert([
            'subscriber_id' => '5',
            'equipment_id' => '3'
        ]);

        DB::table('subscribers_systems')->insert([
            'subscriber_id' => '5',
            'equipment_id' => '6'
        ]);
    }
}
