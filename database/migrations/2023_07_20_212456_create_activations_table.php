<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateActivationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('activations', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('replacement_name')->nullable();
            $table->string('replacement_ide')->nullable();
            $table->string('change_name')->nullable();
            $table->string('change_ide')->nullable();
            $table->string('change_reason')->nullable();
            $table->string('refund_name')->nullable();
            $table->string('refund_ide')->nullable();
            $table->string('refund_date')->nullable();
            $table->string('refund_date_retirement')->nullable();
            $table->string('opening_store')->nullable();
            $table->string('opening_date')->nullable();
            $table->string('opening_category')->nullable();

            $table->unsignedBigInteger('type_activation_id');
            $table->foreign('type_activation_id')->references('id')->on('type_activations');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('activations');
    }
}
