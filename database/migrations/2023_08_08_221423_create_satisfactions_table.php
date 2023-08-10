<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSatisfactionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('satisfactions', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            $table->unsignedBigInteger('retreal_id');
            $table->foreign('retreal_id')->references('id')->on('retreals');

            $table->unsignedBigInteger('question_satisfaction_id');
            $table->foreign('question_satisfaction_id')->references('id')->on('question_satisfactions');

            $table->unsignedBigInteger('level_satisfaction_id');
            $table->foreign('level_satisfaction_id')->references('id')->on('level_satisfactions');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('satisfactions');
    }
}
