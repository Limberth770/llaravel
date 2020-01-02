<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAlumnosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alumnos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nombre_alumno', 50);
            $table->string('apellido_pat_alumno', 50);
            $table->string('apellido_mat_alumno', 50);
            $table->date('fecha_nac_alumno');
            $table->string('documento_identidad_alumno', 25);

            $table->string('direccion_alumno', 200);
            $table->string('numero_referencia_alumno', 200);
            $table->string('nivel_estudios_alumno', 50);
            $table->mediumText('informacion_adicional');
            $table->integer('numero_telefonico_alumno');

            $table->string('correo_alumno', 70);
            $table->integer('estado_alumno');
            $table->string('key_alumno', 70);
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
}
