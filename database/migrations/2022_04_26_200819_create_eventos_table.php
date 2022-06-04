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
        Schema::create('eventos', function (Blueprint $table) {
            $table->id();
             /* 4.CREAR LAS TABLAS */
             $table->string('title',255);
             $table->text('descripcion');
             $table->string('costo_event');
             $table->dateTime('start');
             $table->dateTime('end');
             $table->string('color');


            /* $table->boolean('completed')->default(false); */
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
        Schema::dropIfExists('eventos');
    }
};
