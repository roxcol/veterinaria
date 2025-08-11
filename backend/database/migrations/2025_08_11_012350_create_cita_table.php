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
        Schema::create('cita', function (Blueprint $table) {
            $table->id('id_cita');
            $table->unsignedBigInteger('id_mascota');
            $table->date('fecha');
            $table->time('hora');
            $table->unsignedBigInteger('id_servicio');
            $table->timestamps();
    
            $table->foreign('id_mascota')->references('id_mascota')->on('mascota')->onDelete('cascade');
            $table->foreign('id_servicio')->references('id_servicio')->on('servicio')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cita');
    }
};
