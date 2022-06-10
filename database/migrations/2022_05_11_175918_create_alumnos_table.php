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
        Schema::create('alumnos', function (Blueprint $table) {
            $table->id();
            $table->string('nombre_alumno');
            $table->string('ap_paterno_alumno');
            $table->string('ap_materno_alumno');
            $table->string('curp_alumno');
            $table->string('sexo_alumno');
            $table->integer('edad_alumno');
            $table->string('nombre_tutor');
            $table->string('tel_casa');
            $table->string('cel_tutor');
            $table->string('ciudad_alumno');
            $table->string('alcaldia_alumno');
            $table->string('colonia_alumno');
            $table->string('calle_alumno');
            $table->string('cp_alumno');
            $table->string('nombre_curso');

            $table->unsignedBigInteger('grado_id')->nullable();
            $table->foreign('grado_id')
            ->references('id')->on('grados')->onDelete('cascade');

            $table->string('ciclo_escolar');
            $table->string('fecha_ingreso');
            $table->string('fecha_baja')->nullable();
            $table->string('estatus');
           
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
        Schema::dropIfExists('alumnos');
    }
};
