<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('last_name');
            $table->string('area')->nullable();
            $table->string('regional')->nullable();
            $table->string('type')->default('web');
            $table->string('email');
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('cedula')->nullable();
            $table->string('fecha_ingreso')->nullable();
            $table->string('fecha_retiro')->nullable();
            $table->string('razon_retiro')->nullable();
            $table->boolean('status')->default(1);
            $table->rememberToken();
            $table->foreignId('store_id')->nullable();
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
