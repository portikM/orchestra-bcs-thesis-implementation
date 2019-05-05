<?php

use Illuminate\Database\Seeder;

class SystemsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('systems')->insert([
            'system_type' => '1',
            'system_code' => 'SP1',
            'system_capacity' => '100'
        ]);

        DB::table('systems')->insert([
            'system_type' => '1',
            'system_code' => 'SP2',
            'system_capacity' => '150'
        ]);

        DB::table('systems')->insert([
            'system_type' => '1',
            'system_code' => 'PS1',
            'system_capacity' => '300'
        ]);

        DB::table('systems')->insert([
            'system_type' => '1',
            'system_code' => 'PS2',
            'system_capacity' => '500'
        ]);

        DB::table('systems')->insert([
            'system_type' => '1',
            'system_code' => 'S1P',
            'system_capacity' => '900'
        ]);

        DB::table('systems')->insert([
            'system_type' => '2',
            'system_code' => 'WT1',
            'system_capacity' => '50'
        ]);

        DB::table('systems')->insert([
            'system_type' => '2',
            'system_code' => 'WT2',
            'system_capacity' => '70'
        ]);

        DB::table('systems')->insert([
            'system_type' => '2',
            'system_code' => 'TW1',
            'system_capacity' => '200'
        ]);

        DB::table('systems')->insert([
            'system_type' => '2',
            'system_code' => 'W1T',
            'system_capacity' => '450'
        ]);
    }
}
