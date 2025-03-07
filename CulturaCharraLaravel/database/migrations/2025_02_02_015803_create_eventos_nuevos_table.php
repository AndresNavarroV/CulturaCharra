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
        Schema::create('eventos_nuevos', function (Blueprint $table) {
            $table->id();
            $table->string('Nombre');
            $table->string('Nombre_mariachi');
            $table->char('Núm_telefono', 10);
            $table->string('Email')->unique();
            $table->string('Ubicación_evento');
            $table->datetime('Fecha_hora');
            $table->string('Encargado_evento')->nullable();
            $table->char('Duración_evento', 2);
            $table->enum('Tamaño_equipo_solicitado', ['chico', 'mediano', 'grande']);
            $table->tinyInteger('Núm_violines')->unsigned();
            $table->tinyInteger('Núm_trompetas')->unsigned();
            $table->tinyInteger('Núm_guitarras')->unsigned();
            $table->boolean('Hay_vihuela');
            $table->boolean('Hay_Guitarrón');
            $table->boolean('Hay_Arpa');
            $table->text('Comentarios')->nullable();
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('eventos_nuevos');
    }
};
