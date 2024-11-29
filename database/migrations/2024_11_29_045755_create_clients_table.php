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
        Schema::create('clients', function (Blueprint $table) {
            $table->id(); //* ID del cliente
            $table->string("name"); //* Nombre 
            $table->string("lastname")->nullable(); //* Apellido
            $table->string("email") -> unique(); //* Correo electronico
            $table->string("phone")->nullable(); //* Telefono
            $table->text("address")->nullable(); //* Direccion
            $table->enum('client_type', ['individual', 'company', 'prospect']); //* Tipo de cliente
            $table->json('interaction_history')->nullable(); //* Historial de interacciones
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('clients');
    }
};
