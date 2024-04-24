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
        Schema::create('pqrsds', function (Blueprint $table) {
            $table->id();

            //Datos Cliente
            $table->unsignedBigInteger('idCliente')->nullable();
            $table->string('correoElectronico')->nullable();
            //Datos pqrsd
            $table->enum('esAnonima', ['TRUE', 'FALSE'])->nullable();
            $table->enum('tipoPqrsd', ['peticion', 'queja', 'reclamo', 'solicitud', 'denuncia'])->nullable();
            $table->enum('tipoPersona', ['natural', 'juridica', 'apoderado', 'ninos_ninas_adolescentes'])->nullable();
            $table->text('descripcion')->nullable();
            $table->string('urlPdf')->nullable();
            $table->enum('estado', ['enviado', 'enProceso', 'resuelto'])->nullable();

            $table->timestamps();
            //Llaves foráneas
            $table->foreign('idCliente')->references('id')->on('clientes');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pqrsds');
    }
};
