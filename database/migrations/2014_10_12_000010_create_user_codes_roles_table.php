<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserCodesRolesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('role_user_code', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_code_id')->unsigned();
            $table->integer('role_id')->unsigned();
            $table->timestamps();

            /*
            * Add Foreign/Unique/Index
            */

            $table->foreign('user_code_id', 'foreign_role_user_&_user_code')
                ->references('id')
                ->on('user_codes')
                ->onDelete('cascade');

            $table->foreign('role_id', 'foreign_role_user_&_role')
                ->references('id')
                ->on('roles')
                ->onDelete('cascade');

            $table->unique(['user_code_id', 'role_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('role_user_code', function (Blueprint $table) {
            $table->dropForeign('foreign_role_user_&_user_code');
            $table->dropForeign('foreign_role_user_&_role');
        });

        Schema::dropIfExists('role_user_code');
    }
}
