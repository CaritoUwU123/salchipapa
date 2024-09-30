<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('Grupos_Alumnos', function (Blueprint $table) {
            $table->bigIncrements('id_relacion');
            $table->string('id_alumno');
            $table->string('id_grupo')->unique();
            $table->string('clave');
            $table->boolean('activo');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('Grupos_Alumnos');
    }
};
