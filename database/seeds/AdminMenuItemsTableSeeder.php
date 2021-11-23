<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class AdminMenuItemsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('admin_menu_items')->delete();
        
        \DB::table('admin_menu_items')->insert(array (
            0 => 
            array (
                'class' => NULL,
                'created_at' => '2021-07-29 07:29:57',
                'depth' => 0,
                'id' => 3,
                'label' => 'ХОККЕЙ',
                'label_kk' => 'HOKEI',
                'label_ru' => 'ХОККЕЙ',
                'link' => 'hockey',
                'link_kk' => 'http://test.salemhokei.kz/kk/hockey',
                'link_ru' => 'http://test.salemhokei.kz/ru/hockey',
                'menu' => 1,
                'parent' => 0,
                'sort' => 1,
                'updated_at' => '2021-08-30 17:41:29',
            ),
            1 => 
            array (
                'class' => NULL,
                'created_at' => '2021-07-29 17:17:48',
                'depth' => 0,
                'id' => 4,
                'label' => 'ПОПРОБУЙ',
                'label_kk' => 'Мектептер',
                'label_ru' => 'ПОПРОБУЙ',
                'link' => 'school',
                'link_kk' => 'http://test.salemhokei.kz/kk/schools',
                'link_ru' => 'http://test.salemhokei.kz/ru/schools',
                'menu' => 1,
                'parent' => 0,
                'sort' => 2,
                'updated_at' => '2021-08-30 17:41:42',
            ),
            2 => 
            array (
                'class' => NULL,
                'created_at' => '2021-07-29 17:22:29',
                'depth' => 0,
                'id' => 6,
                'label' => 'С ЧЕГО НАЧАТЬ?',
                'label_kk' => 'Неден бастау қажет?',
                'label_ru' => 'С ЧЕГО НАЧАТЬ?',
                'link' => 'faq',
                'link_kk' => 'http://test.salemhokei.kz/kk/faq',
                'link_ru' => 'http://test.salemhokei.kz/ru/faq',
                'menu' => 1,
                'parent' => 0,
                'sort' => 4,
                'updated_at' => '2021-08-30 17:42:36',
            ),
            3 => 
            array (
                'class' => NULL,
                'created_at' => '2021-07-29 17:24:20',
                'depth' => 0,
                'id' => 7,
                'label' => 'ПОСМОТРИ',
                'label_kk' => 'Жаңалықтар',
                'label_ru' => 'ПОСМОТРИ',
                'link' => 'Новости',
                'link_kk' => 'http://test.salemhokei.kz/kk/news',
                'link_ru' => 'http://test.salemhokei.kz/uz/news',
                'menu' => 1,
                'parent' => 0,
                'sort' => 3,
                'updated_at' => '2021-08-30 17:41:52',
            ),
            4 => 
            array (
                'class' => NULL,
                'created_at' => '2021-07-30 02:36:16',
                'depth' => 0,
                'id' => 8,
                'label' => 'ПРИВЕТ!',
                'label_kk' => 'SALEM!',
                'label_ru' => 'ПРИВЕТ!',
                'link' => '/',
                'link_kk' => 'http://test.salemhokei.kz/kk/',
                'link_ru' => 'http://test.salemhokei.kz/ru/',
                'menu' => 1,
                'parent' => 0,
                'sort' => 0,
                'updated_at' => '2021-08-30 17:41:11',
            ),
            5 => 
            array (
                'class' => NULL,
                'created_at' => '2021-08-30 17:42:26',
                'depth' => 0,
                'id' => 10,
                'label' => 'РОДИТЕЛЯМ',
                'label_kk' => 'РОДИТЕЛЯМ',
                'label_ru' => 'РОДИТЕЛЯМ',
                'link' => 'parents',
                'link_kk' => 'http://test.salemhokei.kz/kk/parents',
                'link_ru' => 'http://test.salemhokei.kz/ru/parents',
                'menu' => 1,
                'parent' => 0,
                'sort' => 5,
                'updated_at' => '2021-09-12 18:44:13',
            ),
            6 => 
            array (
                'class' => NULL,
                'created_at' => '2021-09-12 19:25:46',
                'depth' => 0,
                'id' => 11,
                'label' => 'СЫГРАЙ',
                'label_kk' => 'СЫГРАЙ',
                'label_ru' => 'СЫГРАЙ',
                'link' => 'http://test.salemhokei.kz/kk/play',
                'link_kk' => 'http://test.salemhokei.kz/kk/play',
                'link_ru' => 'http://test.salemhokei.kz/ru/play',
                'menu' => 1,
                'parent' => 0,
                'sort' => 6,
                'updated_at' => '2021-09-12 19:26:14',
            ),
        ));
        
        
    }
}