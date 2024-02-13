<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVotesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('votes', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('student_id')->unsigned();
            $table->integer('candidate_id')->unsigned();
            $table->timestamps();

            $table->foreign('student_id', 'foreign_students_&_vote')
            ->references('id')
            ->on('students')
            ->onDelete('cascade');

            $table->foreign('candidate_id', 'foreign_candidates_&_strands')
            ->references('id')
            ->on('candidates')
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
        Schema::table('votes', function (Blueprint $table) {
            $table->dropForeign('foreign_students_&_vote');
            $table->dropForeign('foreign_candidates_&_strands');
        });
        Schema::dropIfExists('votes');
    }
}
