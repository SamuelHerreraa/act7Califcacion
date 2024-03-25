<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('actividad_calificables', function (Blueprint $table) {
            $table->id();
            $table->string('nombre'); // Agregar la columna 'nombre'
            $table->float('calificacion');
            $table->date('fecha');
            $table->foreignId('tema_id')->constrained()->onDelete('cascade');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('actividad_calificables');
    }
};
