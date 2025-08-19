<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSonidoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sonido', function (Blueprint $table) {
            $table->id();
            $table->integer('bocinas')->default(0);
            $table->integer('bolsas_bases_bocinas')->default(0);
            $table->integer('bolsas_bases_microfonos_violines')->default(0);
            $table->integer('bolsas_bases_microfonos_armonia')->default(0);
            $table->integer('bolsas_bases_microfonos_inalambricos')->default(0);
            $table->integer('consolas_sonido')->default(0);
            $table->integer('cajas_microfonos_inalambricos')->default(0);
            $table->integer('cajas_microfonos_alambricos')->default(0);
            $table->integer('cajas_cables_electricos')->default(0);
            $table->integer('cajas_cables_xlr')->default(0);
            $table->integer('mesas_consola')->default(0);
            $table->integer('carritos_cargadores')->default(0);
            $table->integer('camionetas')->default(0);
            $table->integer('ingenieros')->default(0);
            $table->integer('tecnicos')->default(0);
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
        Schema::dropIfExists('sonido');
    }
}