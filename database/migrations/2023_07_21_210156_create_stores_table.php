<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stores', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('name_store');
            $table->text('comentaries')->nullable();
            $table->string('status')->default('ABIERTA');
            $table->string('reclutador')->default('SIN ASIGNACIÓN');
            $table->integer('efectividad')->nullable();

            $table->string('nombre_ingreso')->nullable();
            $table->string('cedula_ingreso')->nullable();
            $table->string('fecha_ingreso')->nullable();

            $table->string('ano_solicitud')->nullable();
            $table->string('ano_cierre')->nullable();
            $table->string('mes_solicitud')->nullable();
            $table->string('mes_cierre')->nullable();

            $table->string('person')->nullable();
            $table->string('reason_sus')->nullable();

            $table->string('substate')->default('RECLUTAMIENTO');

            $table->boolean('aprobacion')->default(0);
            $table->boolean('rechazo')->default(0);
            $table->text('reason_rechazo')->nullable();

            $table->unsignedBigInteger('requisition_id');
            $table->foreign('requisition_id')->references('id')->on('requisitions');
            
            $table->unsignedBigInteger('regional_id');
            $table->foreign('regional_id')->references('id')->on('regionals');

            $table->unsignedBigInteger('category_id');
            $table->foreign('category_id')->references('id')->on('categories');

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
        Schema::dropIfExists('stores');
    }
}
