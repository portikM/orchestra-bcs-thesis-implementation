<?php

use Illuminate\Database\Seeder;

class SubscribersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('subscribers')->insert([
            'id' => '1',
            'phone_number' => '3141592653',
            'subscriber_type' => 'Private',
            'address' => '2 Rymskoho-Korsakova St.',
            'city' => 'Sumy',
            'postal_code' => '40000',
            'user_id' => '1'
        ]);

        DB::table('subscribers')->insert([
            'id' => '2',
            'phone_number' => '5897932384',
            'subscriber_type' => 'Business',
            'address' => '134 Petropavlivska St.',
            'city' => 'Sumy',
            'postal_code' => '40042',
            'user_id' => '2'
        ]);

        DB::table('subscribers')->insert([
            'id' => '3',
            'phone_number' => '6264338327',
            'subscriber_type' => 'Private',
            'address' => '420 Canada St.',
            'city' => 'Kyiv',
            'postal_code' => '50051',
            'user_id' => '3'
        ]);

        DB::table('subscribers')->insert([
            'id' => '4',
            'phone_number' => '9502884197',
            'subscriber_type' => 'Бізнес',
            'address' => 'Вул. Богдана Хмерьницького 19, кв.20',
            'city' => 'Хмельницьк',
            'postal_code' => '30031',
            'user_id' => '4'
        ]);

        DB::table('subscribers')->insert([
            'id' => '5',
            'phone_number' => '1693993751',
            'subscriber_type' => 'Приватне',
            'address' => 'Вул. Івана Сірка 20, кв.19',
            'city' => 'Полтава',
            'postal_code' => '60061',
            'user_id' => '5'
        ]);
    }
}
