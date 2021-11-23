<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ArticleTagTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('article_tag')->delete();
        
        \DB::table('article_tag')->insert(array (
            0 => 
            array (
                'article_id' => NULL,
                'created_at' => NULL,
                'id' => 25,
                'tag_id' => 3,
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'article_id' => NULL,
                'created_at' => NULL,
                'id' => 26,
                'tag_id' => 3,
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'article_id' => 3,
                'created_at' => NULL,
                'id' => 27,
                'tag_id' => 3,
                'updated_at' => NULL,
            ),
            3 => 
            array (
                'article_id' => NULL,
                'created_at' => NULL,
                'id' => 28,
                'tag_id' => 3,
                'updated_at' => NULL,
            ),
            4 => 
            array (
                'article_id' => NULL,
                'created_at' => NULL,
                'id' => 41,
                'tag_id' => 3,
                'updated_at' => NULL,
            ),
            5 => 
            array (
                'article_id' => NULL,
                'created_at' => NULL,
                'id' => 42,
                'tag_id' => 3,
                'updated_at' => NULL,
            ),
            6 => 
            array (
                'article_id' => NULL,
                'created_at' => NULL,
                'id' => 43,
                'tag_id' => 2,
                'updated_at' => NULL,
            ),
            7 => 
            array (
                'article_id' => NULL,
                'created_at' => NULL,
                'id' => 44,
                'tag_id' => 1,
                'updated_at' => NULL,
            ),
            8 => 
            array (
                'article_id' => NULL,
                'created_at' => NULL,
                'id' => 45,
                'tag_id' => 2,
                'updated_at' => NULL,
            ),
            9 => 
            array (
                'article_id' => NULL,
                'created_at' => NULL,
                'id' => 46,
                'tag_id' => 5,
                'updated_at' => NULL,
            ),
            10 => 
            array (
                'article_id' => NULL,
                'created_at' => NULL,
                'id' => 47,
                'tag_id' => 6,
                'updated_at' => NULL,
            ),
            11 => 
            array (
                'article_id' => NULL,
                'created_at' => NULL,
                'id' => 48,
                'tag_id' => 7,
                'updated_at' => NULL,
            ),
            12 => 
            array (
                'article_id' => NULL,
                'created_at' => NULL,
                'id' => 49,
                'tag_id' => 8,
                'updated_at' => NULL,
            ),
            13 => 
            array (
                'article_id' => NULL,
                'created_at' => NULL,
                'id' => 50,
                'tag_id' => 9,
                'updated_at' => NULL,
            ),
            14 => 
            array (
                'article_id' => NULL,
                'created_at' => NULL,
                'id' => 51,
                'tag_id' => 10,
                'updated_at' => NULL,
            ),
            15 => 
            array (
                'article_id' => 38,
                'created_at' => NULL,
                'id' => 52,
                'tag_id' => 9,
                'updated_at' => NULL,
            ),
            16 => 
            array (
                'article_id' => NULL,
                'created_at' => NULL,
                'id' => 25,
                'tag_id' => 3,
                'updated_at' => NULL,
            ),
            17 => 
            array (
                'article_id' => NULL,
                'created_at' => NULL,
                'id' => 26,
                'tag_id' => 3,
                'updated_at' => NULL,
            ),
            18 => 
            array (
                'article_id' => 3,
                'created_at' => NULL,
                'id' => 27,
                'tag_id' => 3,
                'updated_at' => NULL,
            ),
            19 => 
            array (
                'article_id' => NULL,
                'created_at' => NULL,
                'id' => 28,
                'tag_id' => 3,
                'updated_at' => NULL,
            ),
            20 => 
            array (
                'article_id' => NULL,
                'created_at' => NULL,
                'id' => 41,
                'tag_id' => 3,
                'updated_at' => NULL,
            ),
            21 => 
            array (
                'article_id' => NULL,
                'created_at' => NULL,
                'id' => 42,
                'tag_id' => 3,
                'updated_at' => NULL,
            ),
            22 => 
            array (
                'article_id' => NULL,
                'created_at' => NULL,
                'id' => 43,
                'tag_id' => 2,
                'updated_at' => NULL,
            ),
            23 => 
            array (
                'article_id' => NULL,
                'created_at' => NULL,
                'id' => 44,
                'tag_id' => 1,
                'updated_at' => NULL,
            ),
            24 => 
            array (
                'article_id' => NULL,
                'created_at' => NULL,
                'id' => 45,
                'tag_id' => 2,
                'updated_at' => NULL,
            ),
            25 => 
            array (
                'article_id' => NULL,
                'created_at' => NULL,
                'id' => 46,
                'tag_id' => 5,
                'updated_at' => NULL,
            ),
            26 => 
            array (
                'article_id' => NULL,
                'created_at' => NULL,
                'id' => 47,
                'tag_id' => 6,
                'updated_at' => NULL,
            ),
            27 => 
            array (
                'article_id' => NULL,
                'created_at' => NULL,
                'id' => 48,
                'tag_id' => 7,
                'updated_at' => NULL,
            ),
            28 => 
            array (
                'article_id' => NULL,
                'created_at' => NULL,
                'id' => 49,
                'tag_id' => 8,
                'updated_at' => NULL,
            ),
            29 => 
            array (
                'article_id' => NULL,
                'created_at' => NULL,
                'id' => 50,
                'tag_id' => 9,
                'updated_at' => NULL,
            ),
            30 => 
            array (
                'article_id' => NULL,
                'created_at' => NULL,
                'id' => 51,
                'tag_id' => 10,
                'updated_at' => NULL,
            ),
            31 => 
            array (
                'article_id' => 38,
                'created_at' => NULL,
                'id' => 52,
                'tag_id' => 9,
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}