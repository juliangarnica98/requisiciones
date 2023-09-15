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
            $table->boolean('status')->default(0);
            $table->string('num_document');

            $table->string('area')->nullable();


            $table->string('name')->nullable();
            $table->string('time')->nullable();
            $table->date('date_entry')->nullable();
            $table->date('date_output')->nullable();
            $table->string('name_boss')->nullable();
            $table->string('charge_boss')->nullable();

            $table->string('reason_retreat')->nullable();

            $table->string('benefits')->nullable();
            $table->string('training')->nullable();
            $table->string('reinforcement')->nullable();
            $table->string('positive_aspects')->nullable();
            
            


            $table->foreignId('retirement_positions_id')->nullable()->constrained('retirement_positions')->onDelete('cascade');

            $table->foreignId('retirement_city_id')->nullable()->constrained('retirement_cities')->onDelete('cascade');



            

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
