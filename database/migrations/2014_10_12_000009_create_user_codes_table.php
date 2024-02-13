<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserCodesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()    
    {
        Schema::create('user_codes', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('personal_information_id')->unsigned();
            $table->string('code');
            $table->timestamps();

            /*
            * Add Foreign/Unique/Index
            */

            $table->foreign('personal_information_id', 'foreign_user_code_&_personal_information')
                ->references('id')
                ->on('personal_informations')
                ->onDelete('cascade');

          
            $table->unique(['personal_information_id']);


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('user_codes', function (Blueprint $table) {
            $table->dropForeign('foreign_user_code_&_personal_information');
        });
        
        Schema::dropIfExists('user_codes');
    }
}
