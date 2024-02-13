<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCandidatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('candidates', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('student_id')->unsigned();
            $table->string('position');
            $table->string('coc_message')->nullable();
            $table->integer('approval')->nullable();
            $table->timestamps();


            /*
            * Add Foreign/Unique/Index
            */

            $table->foreign('student_id', 'foreign_candidates_&_students')
                ->references('id')
                ->on('students')
                ->onDelete('cascade');


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('candidates', function (Blueprint $table) {
            $table->dropForeign('foreign_candidates_&_students');
        });
        Schema::dropIfExists('candidates');
    }
}
