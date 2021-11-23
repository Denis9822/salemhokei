<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('users')->delete();
        
        \DB::table('users')->insert(array (
            0 => 
            array (
                'avatar' => '/assets/img/avatars/m1.png',
                'bin' => NULL,
                'birthday_at' => '1994-05-03 05:00:00',
                'created_at' => NULL,
                'deleted_at' => NULL,
                'description' => 'I love to play dota 2',
                'email' => 'redactor@info.kz',
                'email_verified_at' => NULL,
                'id' => 3,
                'iin' => NULL,
                'name' => 'Редактор-1',
                'password' => '$2y$10$LS8mjz6nwvm/e8d1I1r3lONSSfqdKsDX0W6eY7JcZKK1b5OK5V/lG',
                'phone' => '77011234567',
                'published' => '1',
                'remember_token' => 'wO3nb0lWXDTCvariiDbcJ1L5KPVbzZicDWih5D1PiJHSuOllEFdBdBaELteN',
                'role' => 0,
                'sex' => '0',
                'slug' => NULL,
                'surname' => 'Жаксылык',
                'updated_at' => '2020-06-08 10:21:38',
            ),
            1 => 
            array (
                'avatar' => NULL,
                'bin' => NULL,
                'birthday_at' => NULL,
                'created_at' => '2020-06-08 10:23:52',
                'deleted_at' => NULL,
                'description' => NULL,
                'email' => 'marina@info.kz',
                'email_verified_at' => '2020-06-08 10:23:52',
                'id' => 13,
                'iin' => NULL,
                'name' => 'Марина',
                'password' => '$2y$10$5LI3JoczhY1TuBMu0NcAO.sY9fiVWu6o6mnS61Aaej/Myp2C.OQGK',
                'phone' => NULL,
                'published' => '0',
                'remember_token' => '48d0FgmLVKlR3DWi4tlNRtwPDjRoreS5vUIc5AV9cBqWvJekkdlu9rlYLX6r',
                'role' => 0,
                'sex' => '0',
                'slug' => NULL,
                'surname' => NULL,
                'updated_at' => '2020-06-08 10:23:52',
            ),
            2 => 
            array (
                'avatar' => NULL,
                'bin' => NULL,
                'birthday_at' => NULL,
                'created_at' => '2020-07-02 07:13:38',
                'deleted_at' => NULL,
                'description' => NULL,
                'email' => 'salem.hokei@yandex.kz',
                'email_verified_at' => '2020-07-02 07:13:37',
                'id' => 14,
                'iin' => NULL,
                'name' => 'Администратор Salem Hokei',
                'password' => '$2y$10$iqom/qLSfc7eXQRq9Q.pcO123g/Ewx7N8xEVM/sKXsj2ojNrLtvXe',
                'phone' => NULL,
                'published' => '0',
                'remember_token' => 'unS2hXiGEWcDVrw4kvZDcv80mOTyGfDxpcld852gz8XeBdiMoXWgMO2ZxJ99',
                'role' => 0,
                'sex' => '0',
                'slug' => NULL,
                'surname' => NULL,
                'updated_at' => '2020-07-02 07:13:38',
            ),
            3 => 
            array (
                'avatar' => NULL,
                'bin' => NULL,
                'birthday_at' => NULL,
                'created_at' => '2021-07-27 00:56:57',
                'deleted_at' => NULL,
                'description' => NULL,
                'email' => 'trushkov@icehockey.kz',
                'email_verified_at' => '2021-07-27 00:56:57',
                'id' => 15,
                'iin' => NULL,
                'name' => 'Трушков Михаил',
                'password' => '$2y$10$/QIxNmFKYSeDqHKWsb3Sy.a/n.EaY1Fyyr9qiKtiukpN9mT9OfgqC',
                'phone' => NULL,
                'published' => '0',
                'remember_token' => '28C0IQXkg0hMXtxAlSF6Mxrb5K6RdquXghET1GzrbsLyvDi9mqiPijAFrLuQ',
                'role' => 0,
                'sex' => '0',
                'slug' => NULL,
                'surname' => NULL,
                'updated_at' => '2021-07-27 00:56:57',
            ),
        ));
        
        
    }
}