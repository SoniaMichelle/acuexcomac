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
        Schema::create('docentes', function (Blueprint $table) {
            $table->id();
            $table->string('nombre_docente');
            $table->string('ap_paterno_docente');
            $table->string('ap_materno_docente');
            $table->string('sexo_docente');
            $table->string('edad_docente');
            $table->string('curp_docente');
            $table->string('rfc_docente');
            $table->string('email_docente');
            $table->string('tel_casa_docente');
            $table->string('cel_docente');
            $table->string('ciudad_docente');
            $table->string('alcaldia_docente');
            $table->string('colonia_docente');
            $table->string('calle_docente');
            $table->string('cp_docente');
            $table->string('cedula_docente');
            $table->string('especialidad');
            $table->string('profesion');
           /*  $table->string('asignatura'); */
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
        Schema::dropIfExists('docentes');
    }
};
