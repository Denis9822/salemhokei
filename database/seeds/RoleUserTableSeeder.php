<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class RoleUserTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('role_user')->delete();
        
        \DB::table('role_user')->insert(array (
            0 => 
            array (
                'created_at' => '2020-03-26 14:28:45',
                'id' => 4,
                'role_id' => 2,
                'updated_at' => '2020-03-26 14:28:45',
                'user_id' => 3,
            ),
            1 => 
            array (
                'created_at' => '2020-03-26 14:33:11',
                'id' => 5,
                'role_id' => 2,
                'updated_at' => '2020-03-26 14:33:11',
                'user_id' => 9,
            ),
            2 => 
            array (
                'created_at' => NULL,
                'id' => 9,
                'role_id' => 1,
                'updated_at' => NULL,
                'user_id' => 13,
            ),
            3 => 
            array (
                'created_at' => NULL,
                'id' => 10,
                'role_id' => 1,
                'updated_at' => NULL,
                'user_id' => 14,
            ),
            4 => 
            array (
                'created_at' => NULL,
                'id' => 11,
                'role_id' => 1,
                'updated_at' => NULL,
                'user_id' => 15,
            ),
        ));
        
        
    }
}