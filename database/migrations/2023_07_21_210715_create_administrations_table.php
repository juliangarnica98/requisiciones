<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdministrationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('administrations', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('comentaries')->nullable();

            $table->unsignedBigInteger('requisition_id');
            $table->foreign('requisition_id')->references('id')->on('requisitions');
            
            $table->unsignedBigInteger('area_management_id');
            $table->foreign('area_management_id')->references('id')->on('area_managements');

            $table->unsignedBigInteger('management_id');
            $table->foreign('management_id')->references('id')->on('management');

            $table->unsignedBigInteger('city_id');
            $table->foreign('city_id')->references('id')->on('cities');

            $table->unsignedBigInteger('sex_id');
            $table->foreign('sex_id')->references('id')->on('sexes');

            $table->unsignedBigInteger('activation_id');
            $table->foreign('activation_id')->references('id')->on('activations');

            $table->unsignedBigInteger('activation_charge_id');
            $table->foreign('activation_charge_id')->references('id')->on('activation_charges');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('administrations');
    }
}
