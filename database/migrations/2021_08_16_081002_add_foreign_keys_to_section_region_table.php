<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToSectionRegionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('section_region', function (Blueprint $table) {
            $table->foreign('section_id', 'section_region_ibfk_1')->references('id')->on('sections')->onUpdate('NO ACTION')->onDelete('CASCADE');
            $table->foreign('region_id', 'section_region_ibfk_2')->references('id')->on('regions')->onUpdate('NO ACTION')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('section_region', function (Blueprint $table) {
            $table->dropForeign('section_region_ibfk_1');
            $table->dropForeign('section_region_ibfk_2');
        });
    }
}
