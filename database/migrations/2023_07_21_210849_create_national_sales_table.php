<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNationalSalesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('national_sales', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->text('comentaries')->nullable();
            $table->string('status')->default('ABIERTA');
            $table->string('reclutador')->default('SIN ASIGNACIÓN');
            $table->integer('efectividad')->nullable();

            $table->string('nombre_ingreso')->nullable();
            $table->string('cedula_ingreso')->nullable();
            $table->string('fecha_ingreso')->nullable();

            $table->unsignedBigInteger('requisition_id');
            $table->foreign('requisition_id')->references('id')->on('requisitions');
            
            $table->unsignedBigInteger('charge_id');
            $table->foreign('charge_id')->references('id')->on('charges');

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
        Schema::dropIfExists('national_sales');
    }
}
