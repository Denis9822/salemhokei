<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('events', function (Blueprint $table) {
            $table->integer('id', true);
            $table->string('name_ru', 255);
            $table->string('name_kk', 255)->nullable();
            $table->string('name_en', 255)->nullable();
            $table->string('city_ru', 255);
            $table->string('city_kk', 255)->nullable();
            $table->string('city_en', 255)->nullable();
            $table->string('alias', 255)->nullable();
            $table->longText('description_ru')->nullable();
            $table->longText('description_kk')->nullable();
            $table->longText('description_en')->nullable();
            $table->timestamp('date')->nullable();
            $table->boolean('is_published')->default(0);
            $table->timestamp('created_at')->default('0000-00-00 00:00:00');
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
        Schema::dropIfExists('events');
    }
}
