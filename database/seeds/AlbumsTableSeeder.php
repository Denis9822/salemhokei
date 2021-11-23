<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class AlbumsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('albums')->delete();
        
        \DB::table('albums')->insert(array (
            0 => 
            array (
                'alias' => '1-albom-1',
                'avatar' => '/images/1591596329.png',
                'created_at' => '2020-03-30 16:52:18',
                'id' => 1,
                'is_published' => 1,
                'meta_description_en' => NULL,
                'meta_description_kk' => NULL,
                'meta_description_ru' => NULL,
                'meta_title_en' => NULL,
                'meta_title_kk' => NULL,
                'meta_title_ru' => NULL,
                'name_en' => NULL,
                'name_kk' => NULL,
                'name_ru' => 'Альбом 1',
                'open_graph_description_en' => NULL,
                'open_graph_description_kk' => NULL,
                'open_graph_description_ru' => NULL,
                'open_graph_title_en' => NULL,
                'open_graph_title_kk' => NULL,
                'open_graph_title_ru' => NULL,
                'published_at' => '2020-04-04 10:05:00',
                'type' => 3,
                'updated_at' => '2020-06-08 11:05:33',
            ),
        ));
        
        
    }
}