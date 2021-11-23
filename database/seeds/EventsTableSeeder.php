<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class EventsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('events')->delete();
        
        \DB::table('events')->insert(array (
            0 => 
            array (
                'alias' => '1-meropriyatie-1',
                'city_en' => NULL,
                'city_kk' => 'Астана каласы',
                'city_ru' => 'Астана',
                'created_at' => '2020-03-26 16:29:29',
                'date' => '2020-03-28 16:27:00',
                'description_en' => '<p>2345</p>',
                'description_kk' => '<p>223</p>',
                'description_ru' => '<p>123456</p>',
                'id' => 1,
                'is_published' => 1,
                'name_en' => 'Event',
                'name_kk' => 'Мероприятие 1',
                'name_ru' => 'Мероприятие 1',
                'updated_at' => '2020-03-26 16:32:21',
            ),
        ));
        
        
    }
}