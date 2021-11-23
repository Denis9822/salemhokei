<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVideosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('videos', function (Blueprint $table) {
            $table->integer('id', true);
            $table->string('name_ru', 255)->nullable();
            $table->string('name_kk', 255)->nullable();
            $table->string('name_en', 255)->nullable();
            $table->string('link_ru', 255)->nullable();
            $table->string('link_kk', 255)->nullable();
            $table->string('link_en', 255)->nullable();
            $table->boolean('type')->default(2);
            $table->timestamp('published_at');
            $table->boolean('is_published')->default(0);
            $table->timestamp('created_at');
            $table->timestamp('updated_at')->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('videos');
    }
}
