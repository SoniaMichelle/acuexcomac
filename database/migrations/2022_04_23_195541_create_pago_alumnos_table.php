<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pago_alumnos', function (Blueprint $table) {
            $table->id();

            /* $table->unsignedBigInteger('alumno_id')->nullable();
            $table->foreign('alumno_id')
            ->references('id')->on('alumnos')->onDelete('cascade'); */

            $table->string('concepto_alum');
            $table->string('cantidad_alum')->nullable();
            $table->date('fecha_alum');
            /* $table->string('photo_pago')->nullable(); */

            /* $table->unsignedBigInteger('evento_id')->nullable();
            $table->foreign('evento_id')
            ->references('id')->on('eventos')->onDelete('cascade'); */

            /* $table->integer('valor_evento')->nullable();
            $table->integer('aporte')->nullable(); */

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
        Schema::dropIfExists('pago_alumnos');
    }
};
