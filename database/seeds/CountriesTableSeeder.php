<?php

use Illuminate\Database\Seeder;

class CountriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('countries')->insert([
            'country_name_en' => 'Australia',
            'country_name_ua' => 'Австралія',
            'latitude' => '25.2744',
            'hemisphere' => 'S'
        ]);

        DB::table('countries')->insert([
            'country_name_en' => 'Austria',
            'country_name_ua' => 'Австрія',
            'latitude' => '47.5162',
            'hemisphere' => 'N'
        ]);

        DB::table('countries')->insert([
            'country_name_en' => 'Belarus',
            'country_name_ua' => 'Білорусія',
            'latitude' => '53.7098',
            'hemisphere' => 'N'
        ]);

        DB::table('countries')->insert([
            'country_name_en' => 'Canada',
            'country_name_ua' => 'Канада',
            'latitude' => '56.1304',
            'hemisphere' => 'B'
        ]);

        DB::table('countries')->insert([
            'country_name_en' => 'China',
            'country_name_ua' => 'Китай',
            'latitude' => '49.7448',
            'hemisphere' => 'N'
        ]);

        DB::table('countries')->insert([
            'country_name_en' => 'Egypt',
            'country_name_ua' => 'Єгипет',
            'latitude' => '26.8206',
            'hemisphere' => 'N'
        ]);

        DB::table('countries')->insert([
            'country_name_en' => 'Finland',
            'country_name_ua' => 'Фінляндія',
            'latitude' => '61.9241',
            'hemisphere' => 'N'
        ]);

        DB::table('countries')->insert([
            'country_name_en' => 'France',
            'country_name_ua' => 'Фрація',
            'latitude' => '46.2276',
            'hemisphere' => 'N'
        ]);

        DB::table('countries')->insert([
            'country_name_en' => 'Georgia',
            'country_name_ua' => 'Грузія',
            'latitude' => '32.1656',
            'hemisphere' => 'N'
        ]);

        DB::table('countries')->insert([
            'country_name_en' => 'Germany',
            'country_name_ua' => 'Німеччина',
            'latitude' => '51.1657',
            'hemisphere' => 'N'
        ]);

        DB::table('countries')->insert([
            'country_name_en' => 'Greece',
            'country_name_ua' => 'Греція',
            'latitude' => '39.0742',
            'hemisphere' => 'N'
        ]);

        DB::table('countries')->insert([
            'country_name_en' => 'Greenland',
            'country_name_ua' => 'Грінландія',
            'latitude' => '71.7069',
            'hemisphere' => 'N'
        ]);

        DB::table('countries')->insert([
            'country_name_en' => 'Hong Kong',
            'country_name_ua' => 'Гонг Конг',
            'latitude' => '22.3193',
            'hemisphere' => 'N'
        ]);

        DB::table('countries')->insert([
            'country_name_en' => 'Hungary',
            'country_name_ua' => 'Хорватія',
            'latitude' => '47.1625',
            'hemisphere' => 'N'
        ]);

        DB::table('countries')->insert([
            'country_name_en' => 'Iceland',
            'country_name_ua' => 'Ісландія',
            'latitude' => '64.9631',
            'hemisphere' => 'N'
        ]);

        DB::table('countries')->insert([
            'country_name_en' => 'India',
            'country_name_ua' => 'Індія',
            'latitude' => '20.5937',
            'hemisphere' => 'N'
        ]);

        DB::table('countries')->insert([
            'country_name_en' => 'Ireland',
            'country_name_ua' => 'Ірландія',
            'latitude' => '53.1424',
            'hemisphere' => 'N'
        ]);

        DB::table('countries')->insert([
            'country_name_en' => 'Israel',
            'country_name_ua' => 'Ізраїль',
            'latitude' => '31.0461',
            'hemisphere' => 'N'
        ]);

        DB::table('countries')->insert([
            'country_name_en' => 'Italy',
            'country_name_ua' => 'Італія',
            'latitude' => '41.8719',
            'hemisphere' => 'N'
        ]);

        DB::table('countries')->insert([
            'country_name_en' => 'Latvia',
            'country_name_ua' => 'Латвія',
            'latitude' => '56.8796',
            'hemisphere' => 'N'
        ]);

        DB::table('countries')->insert([
            'country_name_en' => 'Norway',
            'country_name_ua' => 'Норвегія',
            'latitude' => '60.4720',
            'hemisphere' => 'N'
        ]);

        DB::table('countries')->insert([
            'country_name_en' => 'Poland',
            'country_name_ua' => 'Польша',
            'latitude' => '51.9194',
            'hemisphere' => 'N'
        ]);

        DB::table('countries')->insert([
            'country_name_en' => 'Portugal',
            'country_name_ua' => 'Португалія',
            'latitude' => '39.3999',
            'hemisphere' => 'N'
        ]);

        DB::table('countries')->insert([
            'country_name_en' => 'Romania',
            'country_name_ua' => 'Румунія',
            'latitude' => '45.9432',
            'hemisphere' => 'N'
        ]);

        DB::table('countries')->insert([
            'country_name_en' => 'Russian Federation',
            'country_name_ua' => 'Російська Федерація',
            'latitude' => '61.5240',
            'hemisphere' => 'N'
        ]);

        DB::table('countries')->insert([
            'country_name_en' => 'Singapore',
            'country_name_ua' => 'Сінгапур',
            'latitude' => '1.3521',
            'hemisphere' => 'N'
        ]);

        DB::table('countries')->insert([
            'country_name_en' => 'Slovakia',
            'country_name_ua' => 'Словакія',
            'latitude' => '48.6690',
            'hemisphere' => 'N'
        ]);

        DB::table('countries')->insert([
            'country_name_en' => 'Slovenia',
            'country_name_ua' => 'Словенія',
            'latitude' => '46.1512',
            'hemisphere' => 'N'
        ]);

        DB::table('countries')->insert([
            'country_name_en' => 'South Africa',
            'country_name_ua' => 'Південна Африка',
            'latitude' => '30.5595',
            'hemisphere' => 'S'
        ]);

        DB::table('countries')->insert([
            'country_name_en' => 'Spain',
            'country_name_ua' => 'Іспанія',
            'latitude' => '40.4637',
            'hemisphere' => 'N'
        ]);

        DB::table('countries')->insert([
            'country_name_en' => 'Sweden',
            'country_name_ua' => 'Швеція',
            'latitude' => '60.1282',
            'hemisphere' => 'N'
        ]);

        DB::table('countries')->insert([
            'country_name_en' => 'Switzerland',
            'country_name_ua' => 'Швейцарія',
            'latitude' => '46.8182',
            'hemisphere' => 'N'
        ]);

        DB::table('countries')->insert([
            'country_name_en' => 'Turkey',
            'country_name_ua' => 'Турція',
            'latitude' => '38.9637',
            'hemisphere' => 'N'
        ]);

        DB::table('countries')->insert([
            'country_name_en' => 'Ukraine',
            'country_name_ua' => 'Україна',
            'latitude' => '48.3794',
            'hemisphere' => 'N'
        ]);

        DB::table('countries')->insert([
            'country_name_en' => 'United Arab Emirates',
            'country_name_ua' => "Об'єднані Арабські Емірати",
            'latitude' => '23.4241',
            'hemisphere' => 'N'
        ]);

        DB::table('countries')->insert([
            'country_name_en' => 'United Kingdom',
            'country_name_ua' => 'Британія',
            'latitude' => '55.3781',
            'hemisphere' => 'N'
        ]);

        DB::table('countries')->insert([
            'country_name_en' => 'United States',
            'country_name_ua' => 'Сполучені Штати',
            'latitude' => '37.0902',
            'hemisphere' => 'N'
        ]);
    }
}
