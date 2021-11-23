<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class AuthorsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('authors')->delete();
        
        \DB::table('authors')->insert(array (
            0 => 
            array (
                'alias' => '2-mukhamed-kanapiya',
            'annotation' => '<p><span style="color: #545454; font-family: Ubuntu, sans-serif; font-size: 16px; text-align: center;">Главный редактор блога Panama.kz. Пишу про интернет маркетинг, в основном про поисковое продвижение (SEO).</span></p>',
                'avatar' => '/images/1573557000.jpg',
                'created_at' => '2019-11-12 11:48:17',
            'description' => '<p><span style="color: #545454; font-family: Ubuntu, sans-serif; font-size: 16px; text-align: center;">Главный редактор блога Panama.kz. Пишу про интернет маркетинг, в основном про поисковое продвижение (SEO).</span></p>',
                'facebook_url' => NULL,
                'id' => 2,
                'instagram_url' => NULL,
                'is_published' => 1,
                'meta_description' => NULL,
                'meta_keywords' => NULL,
                'meta_title' => NULL,
                'name' => 'Мухамед-Канапия',
                'site_url' => NULL,
                'twitter_url' => 'https://twitter.com/kanapiyaru',
                'updated_at' => '2019-12-09 14:10:04',
                'views' => 0,
                'vk_url' => NULL,
                'youtube_url' => NULL,
            ),
            1 => 
            array (
                'alias' => '2-mukhamed-kanapiya',
            'annotation' => '<p><span style="color: #545454; font-family: Ubuntu, sans-serif; font-size: 16px; text-align: center;">Главный редактор блога Panama.kz. Пишу про интернет маркетинг, в основном про поисковое продвижение (SEO).</span></p>',
                'avatar' => '/images/1573557000.jpg',
                'created_at' => '2019-11-12 11:48:17',
            'description' => '<p><span style="color: #545454; font-family: Ubuntu, sans-serif; font-size: 16px; text-align: center;">Главный редактор блога Panama.kz. Пишу про интернет маркетинг, в основном про поисковое продвижение (SEO).</span></p>',
                'facebook_url' => NULL,
                'id' => 2,
                'instagram_url' => NULL,
                'is_published' => 1,
                'meta_description' => NULL,
                'meta_keywords' => NULL,
                'meta_title' => NULL,
                'name' => 'Мухамед-Канапия',
                'site_url' => NULL,
                'twitter_url' => 'https://twitter.com/kanapiyaru',
                'updated_at' => '2019-12-09 14:10:04',
                'views' => 0,
                'vk_url' => NULL,
                'youtube_url' => NULL,
            ),
        ));
        
        
    }
}