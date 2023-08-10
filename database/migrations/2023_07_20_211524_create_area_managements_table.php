<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAreaManagementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('area_managements', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('description');

            $table->unsignedBigInteger('management_id');
            $table->foreign('management_id')->references('id')->on('management');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('area_managements');
    }
}
