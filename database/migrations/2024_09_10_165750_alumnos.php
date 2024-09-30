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
        Schema::create('Alumnos', function (Blueprint $table) {
            $table->bigIncrements('id_alumno');
            $table->string('nombre');
            $table->text('foto')->unique();
            $table->date('fecha_n')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('Alumnos');
    }
};
