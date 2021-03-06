<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('roles')->delete();
        
        \DB::table('roles')->insert(array (
            0 => 
            array (
                'created_at' => NULL,
                'description' => NULL,
                'id' => 1,
                'name' => 'Администратор',
                'slug' => 'admin',
                'special' => NULL,
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'created_at' => NULL,
                'description' => NULL,
                'id' => 2,
                'name' => 'Редактор',
                'slug' => 'redactor',
                'special' => NULL,
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}