<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pages', function (Blueprint $table) {
            $table->integer('id', true);
            $table->string('name_ru', 255);
            $table->string('name_kk', 255)->nullable();
            $table->string('name_en', 255)->nullable();
            $table->string('alias', 255)->nullable();
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
            $table->longText('accordion_ru')->nullable();
            $table->longText('accordion_kk')->nullable();
            $table->longText('accordion_en')->nullable();
            $table->longText('employees_ru')->nullable();
            $table->longText('employees_kk')->nullable();
            $table->longText('employees_en')->nullable();
            $table->boolean('is_published')->default(0);
            $table->timestamp('created_at');
            $table->timestamp('updated_at')->default('0000-00-00 00:00:00');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pages');
    }
}
