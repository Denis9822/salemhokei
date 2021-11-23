<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class RegionsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('regions')->delete();
        
        \DB::table('regions')->insert(array (
            0 => 
            array (
                'created_at' => '2020-04-08 13:12:23',
                'id' => 4,
                'name_en' => NULL,
                'name_kk' => 'Ақмола облысы',
                'name_ru' => 'Акмолинская область',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            1 => 
            array (
                'created_at' => '2020-04-08 13:12:31',
                'id' => 5,
                'name_en' => NULL,
                'name_kk' => 'Ақтөбе облысы',
                'name_ru' => 'Актюбинская область',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            2 => 
            array (
                'created_at' => '2020-04-08 13:12:41',
                'id' => 6,
                'name_en' => NULL,
                'name_kk' => 'Алматы облысы',
                'name_ru' => 'Алматинская область',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            3 => 
            array (
                'created_at' => '2020-04-08 13:12:48',
                'id' => 7,
                'name_en' => NULL,
                'name_kk' => 'Атырау облысы',
                'name_ru' => 'Атырауская область',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            4 => 
            array (
                'created_at' => '2020-04-08 13:12:54',
                'id' => 8,
                'name_en' => NULL,
                'name_kk' => 'ШҚО',
                'name_ru' => 'Восточно-Казахстанская область',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            5 => 
            array (
                'created_at' => '2020-04-08 13:13:01',
                'id' => 9,
                'name_en' => NULL,
                'name_kk' => 'Жамбыл облысы',
                'name_ru' => 'Жамбылская область',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            6 => 
            array (
                'created_at' => '2020-04-08 13:13:06',
                'id' => 10,
                'name_en' => NULL,
                'name_kk' => 'БҚО',
                'name_ru' => 'Западно-Казахстанская область',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            7 => 
            array (
                'created_at' => '2020-04-08 13:13:12',
                'id' => 11,
                'name_en' => NULL,
                'name_kk' => 'Қарағанды облысы',
                'name_ru' => 'Карагандинская область',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            8 => 
            array (
                'created_at' => '2020-04-08 13:13:22',
                'id' => 12,
                'name_en' => NULL,
                'name_kk' => 'Қостанай облысы',
                'name_ru' => 'Костанайская область',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            9 => 
            array (
                'created_at' => '2020-04-08 13:13:32',
                'id' => 13,
                'name_en' => NULL,
                'name_kk' => 'Қызылорда облысы',
                'name_ru' => 'Кызылординская область',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            10 => 
            array (
                'created_at' => '2020-04-08 13:13:41',
                'id' => 14,
                'name_en' => NULL,
                'name_kk' => 'Маңғыстау облысы',
                'name_ru' => 'Мангистауская область',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            11 => 
            array (
                'created_at' => '2020-04-08 13:13:47',
                'id' => 15,
                'name_en' => NULL,
                'name_kk' => 'Павлодар облысы',
                'name_ru' => 'Павлодарская область',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            12 => 
            array (
                'created_at' => '2020-04-08 13:13:55',
                'id' => 16,
                'name_en' => NULL,
                'name_kk' => 'СҚО',
                'name_ru' => 'Северо-Казахстанская область',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            13 => 
            array (
                'created_at' => '2020-04-08 13:14:01',
                'id' => 17,
                'name_en' => NULL,
                'name_kk' => 'Түркістан облысы',
                'name_ru' => 'Туркестанская область',
                'updated_at' => '0000-00-00 00:00:00',
            ),
        ));
        
        
    }
}