<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAlbumsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('albums', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name_ru', 255)->nullable();
            $table->string('name_kk', 255)->nullable();
            $table->string('name_en', 255)->nullable();
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
            $table->string('avatar', 255)->nullable();
            $table->string('alias', 255)->nullable();
            $table->boolean('type')->default(3);
            $table->timestamp('published_at');
            $table->boolean('is_published')->default(0);
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
        Schema::dropIfExists('albums');
    }
}
