<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PermissionRoleTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('permission_role')->delete();
        
        \DB::table('permission_role')->insert(array (
            0 => 
            array (
                'created_at' => NULL,
                'id' => 11,
                'permission_id' => 55,
                'role_id' => 1,
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'created_at' => NULL,
                'id' => 12,
                'permission_id' => 56,
                'role_id' => 1,
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'created_at' => NULL,
                'id' => 14,
                'permission_id' => 57,
                'role_id' => 1,
                'updated_at' => NULL,
            ),
            3 => 
            array (
                'created_at' => NULL,
                'id' => 15,
                'permission_id' => 58,
                'role_id' => 1,
                'updated_at' => NULL,
            ),
            4 => 
            array (
                'created_at' => NULL,
                'id' => 16,
                'permission_id' => 59,
                'role_id' => 1,
                'updated_at' => NULL,
            ),
            5 => 
            array (
                'created_at' => NULL,
                'id' => 17,
                'permission_id' => 60,
                'role_id' => 1,
                'updated_at' => NULL,
            ),
            6 => 
            array (
                'created_at' => NULL,
                'id' => 18,
                'permission_id' => 61,
                'role_id' => 1,
                'updated_at' => NULL,
            ),
            7 => 
            array (
                'created_at' => NULL,
                'id' => 19,
                'permission_id' => 62,
                'role_id' => 1,
                'updated_at' => NULL,
            ),
            8 => 
            array (
                'created_at' => NULL,
                'id' => 20,
                'permission_id' => 63,
                'role_id' => 1,
                'updated_at' => NULL,
            ),
            9 => 
            array (
                'created_at' => NULL,
                'id' => 21,
                'permission_id' => 64,
                'role_id' => 1,
                'updated_at' => NULL,
            ),
            10 => 
            array (
                'created_at' => NULL,
                'id' => 22,
                'permission_id' => 65,
                'role_id' => 1,
                'updated_at' => NULL,
            ),
            11 => 
            array (
                'created_at' => NULL,
                'id' => 23,
                'permission_id' => 66,
                'role_id' => 1,
                'updated_at' => NULL,
            ),
            12 => 
            array (
                'created_at' => NULL,
                'id' => 25,
                'permission_id' => 68,
                'role_id' => 1,
                'updated_at' => NULL,
            ),
            13 => 
            array (
                'created_at' => NULL,
                'id' => 27,
                'permission_id' => 70,
                'role_id' => 1,
                'updated_at' => NULL,
            ),
            14 => 
            array (
                'created_at' => NULL,
                'id' => 28,
                'permission_id' => 71,
                'role_id' => 1,
                'updated_at' => NULL,
            ),
            15 => 
            array (
                'created_at' => '2020-03-27 11:51:38',
                'id' => 29,
                'permission_id' => 1,
                'role_id' => 3,
                'updated_at' => '2020-03-27 11:51:38',
            ),
            16 => 
            array (
                'created_at' => '2020-03-27 11:51:38',
                'id' => 30,
                'permission_id' => 2,
                'role_id' => 3,
                'updated_at' => '2020-03-27 11:51:38',
            ),
            17 => 
            array (
                'created_at' => '2020-03-27 12:02:29',
                'id' => 32,
                'permission_id' => 6,
                'role_id' => 1,
                'updated_at' => '2020-03-27 12:02:29',
            ),
            18 => 
            array (
                'created_at' => '2020-03-27 13:11:47',
                'id' => 48,
                'permission_id' => 5,
                'role_id' => 1,
                'updated_at' => '2020-03-27 13:11:47',
            ),
            19 => 
            array (
                'created_at' => '2020-03-27 13:12:10',
                'id' => 49,
                'permission_id' => 69,
                'role_id' => 1,
                'updated_at' => '2020-03-27 13:12:10',
            ),
            20 => 
            array (
                'created_at' => '2020-03-27 13:21:08',
                'id' => 52,
                'permission_id' => 8,
                'role_id' => 1,
                'updated_at' => '2020-03-27 13:21:08',
            ),
            21 => 
            array (
                'created_at' => '2020-03-27 13:32:10',
                'id' => 56,
                'permission_id' => 7,
                'role_id' => 1,
                'updated_at' => '2020-03-27 13:32:10',
            ),
            22 => 
            array (
                'created_at' => '2020-03-27 14:38:29',
                'id' => 59,
                'permission_id' => 76,
                'role_id' => 1,
                'updated_at' => '2020-03-27 14:38:29',
            ),
            23 => 
            array (
                'created_at' => '2020-03-27 14:38:29',
                'id' => 60,
                'permission_id' => 77,
                'role_id' => 1,
                'updated_at' => '2020-03-27 14:38:29',
            ),
            24 => 
            array (
                'created_at' => '2020-03-27 14:38:29',
                'id' => 61,
                'permission_id' => 78,
                'role_id' => 1,
                'updated_at' => '2020-03-27 14:38:29',
            ),
            25 => 
            array (
                'created_at' => '2020-03-27 14:38:29',
                'id' => 62,
                'permission_id' => 79,
                'role_id' => 1,
                'updated_at' => '2020-03-27 14:38:29',
            ),
            26 => 
            array (
                'created_at' => '2020-04-08 09:59:31',
                'id' => 63,
                'permission_id' => 80,
                'role_id' => 1,
                'updated_at' => '2020-04-08 09:59:31',
            ),
            27 => 
            array (
                'created_at' => '2020-04-08 09:59:31',
                'id' => 64,
                'permission_id' => 81,
                'role_id' => 1,
                'updated_at' => '2020-04-08 09:59:31',
            ),
            28 => 
            array (
                'created_at' => '2020-04-08 09:59:31',
                'id' => 65,
                'permission_id' => 82,
                'role_id' => 1,
                'updated_at' => '2020-04-08 09:59:31',
            ),
            29 => 
            array (
                'created_at' => '2020-04-08 09:59:31',
                'id' => 66,
                'permission_id' => 83,
                'role_id' => 1,
                'updated_at' => '2020-04-08 09:59:31',
            ),
        ));
        
        
    }
}