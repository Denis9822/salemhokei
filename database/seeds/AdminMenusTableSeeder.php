<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class AdminMenusTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('admin_menus')->delete();
        
        \DB::table('admin_menus')->insert(array (
            0 => 
            array (
                'created_at' => '2021-07-29 06:58:03',
                'id' => 1,
                'name' => 'Главный меню',
                'updated_at' => '2021-07-29 06:58:03',
            ),
        ));
        
        
    }
}