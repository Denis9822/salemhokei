<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class VideosTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('videos')->delete();
        
        \DB::table('videos')->insert(array (
            0 => 
            array (
                'created_at' => '2020-05-05 16:17:14',
                'id' => 1,
                'is_published' => 1,
                'link_en' => NULL,
                'link_kk' => NULL,
                'link_ru' => 'https://www.youtube.com/watch?v=cbe1x1Eh1Ds',
                'name_en' => NULL,
                'name_kk' => NULL,
                'name_ru' => 'Видео 1',
                'published_at' => '2020-05-05 16:17:14',
                'type' => 2,
                'updated_at' => '2020-05-04 17:26:47',
            ),
        ));
        
        
    }
}