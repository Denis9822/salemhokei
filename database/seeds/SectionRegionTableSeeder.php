<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class SectionRegionTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('section_region')->delete();
        
        \DB::table('section_region')->insert(array (
            0 => 
            array (
                'created_at' => '2020-06-10 09:29:14',
                'id' => 8,
                'region_id' => 6,
                'section_id' => 8,
                'updated_at' => '2020-06-10 09:29:14',
            ),
            1 => 
            array (
                'created_at' => '2020-06-10 09:25:48',
                'id' => 9,
                'region_id' => 4,
                'section_id' => 1,
                'updated_at' => '2020-06-10 09:25:48',
            ),
            2 => 
            array (
                'created_at' => '2020-06-10 09:25:48',
                'id' => 10,
                'region_id' => 4,
                'section_id' => 2,
                'updated_at' => '2020-06-10 09:25:48',
            ),
            3 => 
            array (
                'created_at' => '2020-06-10 09:25:48',
                'id' => 11,
                'region_id' => 4,
                'section_id' => 3,
                'updated_at' => '2020-06-10 09:25:48',
            ),
            4 => 
            array (
                'created_at' => '2020-06-10 09:25:48',
                'id' => 12,
                'region_id' => 4,
                'section_id' => 4,
                'updated_at' => '2020-06-10 09:25:48',
            ),
            5 => 
            array (
                'created_at' => '2020-06-10 09:29:14',
                'id' => 13,
                'region_id' => 6,
                'section_id' => 5,
                'updated_at' => '2020-06-10 09:29:14',
            ),
            6 => 
            array (
                'created_at' => '2020-06-10 09:29:14',
                'id' => 14,
                'region_id' => 6,
                'section_id' => 6,
                'updated_at' => '2020-06-10 09:29:14',
            ),
            7 => 
            array (
                'created_at' => '2020-06-10 09:29:14',
                'id' => 15,
                'region_id' => 6,
                'section_id' => 7,
                'updated_at' => '2020-06-10 09:29:14',
            ),
            8 => 
            array (
                'created_at' => '2020-06-10 09:29:14',
                'id' => 16,
                'region_id' => 6,
                'section_id' => 9,
                'updated_at' => '2020-06-10 09:29:14',
            ),
            9 => 
            array (
                'created_at' => '2020-05-20 14:13:32',
                'id' => 17,
                'region_id' => 4,
                'section_id' => 10,
                'updated_at' => '2020-05-20 14:13:32',
            ),
            10 => 
            array (
                'created_at' => '2020-05-20 14:14:50',
                'id' => 18,
                'region_id' => 8,
                'section_id' => 11,
                'updated_at' => '2020-05-20 14:14:50',
            ),
            11 => 
            array (
                'created_at' => '2020-05-20 14:17:20',
                'id' => 19,
                'region_id' => 11,
                'section_id' => 12,
                'updated_at' => '2020-05-20 14:17:20',
            ),
            12 => 
            array (
                'created_at' => '2020-05-20 14:18:38',
                'id' => 20,
                'region_id' => 15,
                'section_id' => 13,
                'updated_at' => '2020-05-20 14:18:38',
            ),
            13 => 
            array (
                'created_at' => '2020-06-10 09:31:26',
                'id' => 21,
                'region_id' => 17,
                'section_id' => 14,
                'updated_at' => '2020-06-10 09:31:26',
            ),
            14 => 
            array (
                'created_at' => '2020-05-20 14:21:42',
                'id' => 22,
                'region_id' => 15,
                'section_id' => 15,
                'updated_at' => '2020-05-20 14:21:42',
            ),
            15 => 
            array (
                'created_at' => '2020-05-20 14:22:57',
                'id' => 23,
                'region_id' => 15,
                'section_id' => 16,
                'updated_at' => '2020-05-20 14:22:57',
            ),
            16 => 
            array (
                'created_at' => '2020-05-20 14:24:50',
                'id' => 24,
                'region_id' => 16,
                'section_id' => 17,
                'updated_at' => '2020-05-20 14:24:50',
            ),
            17 => 
            array (
                'created_at' => '2020-05-20 14:26:06',
                'id' => 25,
                'region_id' => 14,
                'section_id' => 18,
                'updated_at' => '2020-05-20 14:26:06',
            ),
            18 => 
            array (
                'created_at' => '2020-05-20 14:27:50',
                'id' => 26,
                'region_id' => 5,
                'section_id' => 19,
                'updated_at' => '2020-05-20 14:27:50',
            ),
            19 => 
            array (
                'created_at' => '2020-05-20 14:29:06',
                'id' => 27,
                'region_id' => 7,
                'section_id' => 20,
                'updated_at' => '2020-05-20 14:29:06',
            ),
            20 => 
            array (
                'created_at' => '2020-05-20 14:30:02',
                'id' => 28,
                'region_id' => 10,
                'section_id' => 21,
                'updated_at' => '2020-05-20 14:30:02',
            ),
            21 => 
            array (
                'created_at' => '2020-05-20 14:30:54',
                'id' => 29,
                'region_id' => 12,
                'section_id' => 22,
                'updated_at' => '2020-05-20 14:30:54',
            ),
            22 => 
            array (
                'created_at' => '2020-05-20 14:32:15',
                'id' => 30,
                'region_id' => 11,
                'section_id' => 23,
                'updated_at' => '2020-05-20 14:32:15',
            ),
            23 => 
            array (
                'created_at' => '2020-07-10 23:01:42',
                'id' => 31,
                'region_id' => 13,
                'section_id' => 24,
                'updated_at' => '2020-07-10 23:01:42',
            ),
        ));
        
        
    }
}