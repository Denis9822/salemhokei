<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSectionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create("sections", function (Blueprint $table) {
            $table->increments("id");
            $table->integer("parent_id")->unsigned()->index()->nullable()->default(null);
            $table->foreign("parent_id")->references("id")->on("sections")->onDelete("SET NULL");
            $table->string("avatar")->nullable();
            $table->string("name_ru")->nullable();
            $table->string("open_graph_title_en")->nullable();
            $table->string("open_graph_title_kk")->nullable();
            $table->string("open_graph_title_ru")->nullable();
            $table->string("open_graph_description_en")->nullable();
            $table->string("open_graph_description_kk")->nullable();
            $table->string("open_graph_description_ru")->nullable();
            $table->string("city_en")->nullable();
            $table->string("city_kk")->nullable();
            $table->string("city_ru")->nullable();
            $table->string("name_kk")->nullable();
            $table->string("name_en")->nullable();
            $table->longText("description_ru")->nullable();
            $table->longText("description_kk")->nullable();
            $table->longText("description_en")->nullable();
            $table->longText("employees_ru")->nullable();
            $table->longText("employees_kk")->nullable();
            $table->longText("employees_en")->nullable();
            $table->longText("accordion_ru")->nullable();
            $table->longText("accordion_kk")->nullable();
            $table->longText("accordion_en")->nullable();
            $table->string("meta_title_ru")->nullable();
            $table->string("meta_title_kk")->nullable();
            $table->string("meta_title_en")->nullable();
            $table->longText("meta_description_ru")->nullable();
            $table->longText("meta_description_kk")->nullable();
            $table->longText("meta_description_en")->nullable();
            $table->longText("meta_keywords_ru")->nullable();
            $table->longText("meta_keywords_kk")->nullable();
            $table->longText("meta_keywords_en")->nullable();
            $table->string("alt")->nullable();
            $table->string("annotation_en")->nullable();
            $table->string("annotation_ru")->nullable();
            $table->string("annotation_kk")->nullable();
            $table->string("alias")->nullable();
            $table->string("alias_ru")->nullable();
            $table->string("alias_kk")->nullable();
            $table->string("alias_en")->nullable();
            $table->integer("views")->default(0);
            $table->boolean("is_published")->default(false);
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
        Schema::dropIfExists("sections");
    }
}
