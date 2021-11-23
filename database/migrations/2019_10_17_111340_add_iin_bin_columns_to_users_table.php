<?php

use Illuminate\Database\Migrations\Migration;

class AddIinBinColumnsToUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table("users", function ($table) {
            $table->string("bin")->after("email_verified_at")->nullable();
            $table->string("iin")->after("email_verified_at")->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table("users", function ($table) {
            $table->dropColumn("bin");
            $table->dropColumn("iin");
        });
    }
}
