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
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_code_id')->unsigned();
            $table->string('email')->unique();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();

            
            /*
            * Add Foreign/Unique/Index
            */
            
            $table->foreign('user_code_id', 'foreign_user_&_user_code')
                ->references('id')
                ->on('user_codes')
                ->onDelete('cascade');

            $table->unique(['user_code_id']);

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropForeign('foreign_user_&_user_code');
        });

        Schema::dropIfExists('users');
    }
}
