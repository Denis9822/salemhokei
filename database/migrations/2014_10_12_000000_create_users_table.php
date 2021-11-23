<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create("users", function (Blueprint $table) {
            $table->bigIncrements("id");
            $table->string("name");
            $table->string("surname")->nullable();
            $table->string("description")->nullable();
            $table->string("phone")->nullable();
            $table->string("published")->nullable();
            $table->unsignedSmallInteger("role")->nullable();
            $table->string("avatar")->nullable();
            $table->string("sex")->nullable();
            $table->string("slug")->nullable();
            $table->dateTime("birthday_at")->nullable();
            $table->string("email")->unique();
            $table->timestamp("email_verified_at")->nullable();
            $table->string("password");
            $table->rememberToken();
            $table->softDeletes();
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
        Schema::dropIfExists("users");
    }
}
