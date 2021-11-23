<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePermissionRoleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $name = config("shinobi.tables.permission_role");

        Schema::create($name, function (Blueprint $table) {
            $table->bigIncrements("id");
            $table->unsignedBigInteger("permission_id")->nullable();
//            $table->foreign("permission_id")->references("id")->on("permissions")->onDelete("set null");
            $table->unsignedBigInteger("role_id")->nullable();
//            $table->foreign("role_id")->references("id")->on("roles")->onDelete("set null");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migration.
     *
     * @return void
     */
    public function down()
    {
        $name = config("shinobi.tables.permission_role");

        Schema::drop($name);
    }
}
