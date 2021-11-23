<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PermissionsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('permissions')->delete();
        
        \DB::table('permissions')->insert(array (
            0 => 
            array (
                'created_at' => NULL,
                'description' => NULL,
                'id' => 5,
                'name' => 'Просмотр списка пользователей',
                'slug' => 'user.view',
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'created_at' => NULL,
                'description' => NULL,
                'id' => 6,
                'name' => 'Создание записи пользователя',
                'slug' => 'user.create',
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'created_at' => NULL,
                'description' => NULL,
                'id' => 7,
                'name' => 'Редактирование записи пользователя',
                'slug' => 'user.edit',
                'updated_at' => NULL,
            ),
            3 => 
            array (
                'created_at' => NULL,
                'description' => NULL,
                'id' => 8,
                'name' => 'Удаление записи пользователя',
                'slug' => 'user.delete',
                'updated_at' => NULL,
            ),
            4 => 
            array (
                'created_at' => NULL,
                'description' => NULL,
                'id' => 55,
                'name' => 'Просмотр списка альбомов',
                'slug' => 'album.view',
                'updated_at' => NULL,
            ),
            5 => 
            array (
                'created_at' => NULL,
                'description' => NULL,
                'id' => 56,
                'name' => 'Создание альбома',
                'slug' => 'album.create',
                'updated_at' => NULL,
            ),
            6 => 
            array (
                'created_at' => NULL,
                'description' => NULL,
                'id' => 57,
                'name' => 'Редактирование альбома',
                'slug' => 'album.edit',
                'updated_at' => NULL,
            ),
            7 => 
            array (
                'created_at' => NULL,
                'description' => NULL,
                'id' => 58,
                'name' => 'Удаление альбома',
                'slug' => 'album.delete',
                'updated_at' => NULL,
            ),
            8 => 
            array (
                'created_at' => NULL,
                'description' => NULL,
                'id' => 59,
                'name' => 'Просмотр списка видео',
                'slug' => 'video.view',
                'updated_at' => NULL,
            ),
            9 => 
            array (
                'created_at' => NULL,
                'description' => NULL,
                'id' => 60,
                'name' => 'Создание записи видео',
                'slug' => 'video.create',
                'updated_at' => NULL,
            ),
            10 => 
            array (
                'created_at' => NULL,
                'description' => NULL,
                'id' => 61,
                'name' => 'Редактирование записи видео',
                'slug' => 'video.edit',
                'updated_at' => NULL,
            ),
            11 => 
            array (
                'created_at' => NULL,
                'description' => NULL,
                'id' => 62,
                'name' => 'Удаление записи видео',
                'slug' => 'video.delete',
                'updated_at' => NULL,
            ),
            12 => 
            array (
                'created_at' => NULL,
                'description' => NULL,
                'id' => 63,
                'name' => 'Просмотр списка статичных страниц',
                'slug' => 'page.view',
                'updated_at' => NULL,
            ),
            13 => 
            array (
                'created_at' => NULL,
                'description' => NULL,
                'id' => 64,
                'name' => 'Создание статичных страниц',
                'slug' => 'page.create',
                'updated_at' => NULL,
            ),
            14 => 
            array (
                'created_at' => NULL,
                'description' => NULL,
                'id' => 65,
                'name' => 'Редактирование статичных страниц',
                'slug' => 'page.edit',
                'updated_at' => NULL,
            ),
            15 => 
            array (
                'created_at' => NULL,
                'description' => NULL,
                'id' => 66,
                'name' => 'Удаление статичных страниц',
                'slug' => 'page.delete',
                'updated_at' => NULL,
            ),
            16 => 
            array (
                'created_at' => NULL,
                'description' => NULL,
                'id' => 68,
                'name' => 'Просмотр списка ролей пользователей',
                'slug' => 'user_role.view',
                'updated_at' => NULL,
            ),
            17 => 
            array (
                'created_at' => NULL,
                'description' => NULL,
                'id' => 69,
                'name' => 'Создание ролей пользователей',
                'slug' => 'user_role.create',
                'updated_at' => NULL,
            ),
            18 => 
            array (
                'created_at' => NULL,
                'description' => NULL,
                'id' => 70,
                'name' => 'Редактирование ролей пользователей',
                'slug' => 'user_role.edit',
                'updated_at' => NULL,
            ),
            19 => 
            array (
                'created_at' => NULL,
                'description' => NULL,
                'id' => 71,
                'name' => 'Удаление ролей пользователей',
                'slug' => 'user_role.delete',
                'updated_at' => NULL,
            ),
            20 => 
            array (
                'created_at' => NULL,
                'description' => NULL,
                'id' => 76,
                'name' => 'Просмотр секций',
                'slug' => 'section.view',
                'updated_at' => NULL,
            ),
            21 => 
            array (
                'created_at' => NULL,
                'description' => NULL,
                'id' => 77,
                'name' => 'Создание секции',
                'slug' => 'section.create',
                'updated_at' => NULL,
            ),
            22 => 
            array (
                'created_at' => NULL,
                'description' => NULL,
                'id' => 78,
                'name' => 'Редактирование секций',
                'slug' => 'section.edit',
                'updated_at' => NULL,
            ),
            23 => 
            array (
                'created_at' => NULL,
                'description' => NULL,
                'id' => 79,
                'name' => 'Удаление секций',
                'slug' => 'section.delete',
                'updated_at' => NULL,
            ),
            24 => 
            array (
                'created_at' => NULL,
                'description' => NULL,
                'id' => 80,
                'name' => 'Просмотр новостей',
                'slug' => 'article.view',
                'updated_at' => NULL,
            ),
            25 => 
            array (
                'created_at' => NULL,
                'description' => NULL,
                'id' => 81,
                'name' => 'Создание новостей',
                'slug' => 'article.create',
                'updated_at' => NULL,
            ),
            26 => 
            array (
                'created_at' => NULL,
                'description' => NULL,
                'id' => 82,
                'name' => 'Редактирование новостей',
                'slug' => 'article.edit',
                'updated_at' => NULL,
            ),
            27 => 
            array (
                'created_at' => NULL,
                'description' => NULL,
                'id' => 83,
                'name' => 'Удаление новостей',
                'slug' => 'article.delete',
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}