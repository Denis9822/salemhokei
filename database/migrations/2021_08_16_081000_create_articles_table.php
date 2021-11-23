<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArticlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('articles', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name_ru', 255);
            $table->string('name_kk', 255)->nullable();
            $table->string('name_en', 255)->nullable();
            $table->longText('description_ru')->nullable();
            $table->longText('description_kk')->nullable();
            $table->longText('description_en')->nullable();
            $table->string('meta_title_ru', 255)->nullable();
            $table->string('meta_title_kk', 255)->nullable();
            $table->string('meta_title_en', 255)->nullable();
            $table->longText('meta_description_ru')->nullable();
            $table->longText('meta_description_kk')->nullable();
            $table->longText('meta_description_en')->nullable();
            $table->string('open_graph_title_ru', 255)->nullable();
            $table->string('open_graph_title_kk', 255)->nullable();
            $table->string('open_graph_title_en', 255)->nullable();
            $table->longText('open_graph_description_ru')->nullable();
            $table->longText('open_graph_description_kk')->nullable();
            $table->longText('open_graph_description_en')->nullable();
            $table->string('alias')->nullable();
            $table->string('avatar')->nullable();
            $table->boolean('type')->default(1);
            $table->boolean('is_published')->default(0);
            $table->timestamp('published_at')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('articles');
    }
}
