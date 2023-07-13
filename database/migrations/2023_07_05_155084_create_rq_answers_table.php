<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRqAnswersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rq_answers', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('description');

            $table->unsignedBigInteger('rq_question_id');
            $table->foreign('rq_question_id')->references('id')->on('rq_questions');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('rq_answers');
    }
}
