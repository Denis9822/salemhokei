<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class AlbumImagesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('album_images')->delete();
        
        \DB::table('album_images')->insert(array (
            0 => 
            array (
                'album_id' => 1,
                'avatar' => '/img/gallery/1591596418.png',
                'created_at' => '2020-06-08 11:06:58',
                'id' => 4,
                'is_published' => 0,
                'updated_at' => '2020-06-08 11:06:58',
            ),
        ));
        
        
    }
}