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
        Schema::create('clientes', function (Blueprint $table) {
            $table->id();

            //Datos Cliente
            $table->string('primerNombre')->nullable();
            $table->string('segundoNombre')->nullable();
            $table->string('primerApellido')->nullable();
            $table->string('segundoApellido')->nullable();
            $table->enum('tipoDocumento', ['cedulaCiudadania', 'cedulaExtranjeria', 'registroCivil', 'tarjetaIdentidad'])->nullable();
            $table->string('numeroIdentificacion')->nullable();
            $table->date('fechaNacimiento')->nullable();
            $table->enum('genero', ['masculino', 'femenino', 'otro'])->nullable();
            $table->char('direccion', 255);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('clientes');
    }
};
