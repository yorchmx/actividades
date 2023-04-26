<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDeportesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('deportes', function (Blueprint $table) {
            $table->id();

            $table->string('nombre_actividad');
            $table->string('edad');
            $table->string('lugar');
            $table->string('dias');
            $table->string('grupo1');
            $table->string('grupo2');
            $table->string('grupo3');
            $table->string('grupo4');
            $table->string('grupo5');
            $table->string('horario_grupo1');
            $table->string('horario_grupo2');
            $table->string('horario_grupo3');
            $table->string('horario_grupo4');
            $table->string('horario_grupo5');
            $table->string('nombre_profesor');
            $table->string('costo_clase');
            $table->string('costo_mensual_paquete1');
            $table->string('costo_mensual_paquete2');
            $table->string('costo_mensual_paquete3');
            $table->string('costo_mensual_paquete4');
            $table->string('costo_mensual_paquete5');
            $table->string('costo_mensual_paquete6');
            $table->string('costo_mensual_paquete7');
            $table->string('costo_mensual_paquete8');
            $table->string('costo_mensual_paquete9');

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
        Schema::dropIfExists('deportes');
    }
}
