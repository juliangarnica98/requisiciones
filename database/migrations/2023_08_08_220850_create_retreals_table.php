<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRetrealsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('retreals', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->boolean('status')->default(1);
            $table->string('num_document');
            $table->string('name');
            $table->string('time')->nullable();
            $table->date('date_entry')->nullable();
            $table->date('date_output')->nullable();
            $table->string('name_boss');
            $table->string('charge_boss');

            $table->string('reinforcement');
            $table->string('positive_aspects');
            $table->string('training');
            $table->string('benefits');


            $table->unsignedBigInteger('retirement_positions_id');
            $table->foreign('retirement_positions_id')->references('id')->on('retirement_positions');

            // $table->unsignedBigInteger('retirement_city_id');
            $table->foreignId('retirement_city_id')->nullable()->constrained('retirement_cities')->onDelete('cascade');

            $table->unsignedBigInteger('area_id');
            $table->foreign('area_id')->references('id')->on('areas');

            $table->unsignedBigInteger('reason_retreat_id');
            $table->foreign('reason_retreat_id')->references('id')->on('reason_retreats');

            

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('retreals');
    }
}
