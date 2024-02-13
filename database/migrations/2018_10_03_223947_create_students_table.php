<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('personal_information_id')->unsigned();
            $table->integer('strand_id')->unsigned();
            $table->string('school_year');
            $table->string('semester');
            $table->string('grade_level');
            $table->string('section');
            $table->string('status');
            $table->timestamps();

            /*
            * Add Foreign/Unique/Index
            */

            $table->foreign('personal_information_id', 'foreign_students_&_personal_informations')
                ->references('id')
                ->on('personal_informations')
                ->onDelete('cascade');

            $table->foreign('strand_id', 'foreign_students_&_strands')
                ->references('id')
                ->on('strands')
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
        Schema::table('students', function (Blueprint $table) {
            $table->dropForeign('foreign_students_&_personal_informations');
            $table->dropForeign('foreign_students_&_strands');
        });
        Schema::dropIfExists('students');
    }
}
