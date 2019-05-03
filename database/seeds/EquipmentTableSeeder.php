<?php

use Illuminate\Database\Seeder;

class EquipmentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('equipment')->insert([
            'equipment_type' => '1',
            'equipment_code' => 'SP1',
            'equipment_capacity' => '100'
        ]);

        DB::table('equipment')->insert([
            'equipment_type' => '1',
            'equipment_code' => 'SP2',
            'equipment_capacity' => '150'
        ]);

        DB::table('equipment')->insert([
            'equipment_type' => '1',
            'equipment_code' => 'PS1',
            'equipment_capacity' => '300'
        ]);

        DB::table('equipment')->insert([
            'equipment_type' => '1',
            'equipment_code' => 'PS2',
            'equipment_capacity' => '500'
        ]);

        DB::table('equipment')->insert([
            'equipment_type' => '1',
            'equipment_code' => 'S1P',
            'equipment_capacity' => '900'
        ]);

        DB::table('equipment')->insert([
            'equipment_type' => '2',
            'equipment_code' => 'WT1',
            'equipment_capacity' => '50'
        ]);

        DB::table('equipment')->insert([
            'equipment_type' => '2',
            'equipment_code' => 'WT2',
            'equipment_capacity' => '70'
        ]);

        DB::table('equipment')->insert([
            'equipment_type' => '2',
            'equipment_code' => 'TW1',
            'equipment_capacity' => '200'
        ]);

        DB::table('equipment')->insert([
            'equipment_type' => '2',
            'equipment_code' => 'W1T',
            'equipment_capacity' => '450'
        ]);
    }
}
