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
        Schema::create('prestamos', function (Blueprint $table) {
            $table->id();
            $table->date('fecha_prestamo');
            $table->string('estado');
            $table->unsignedBigInteger('idcliente');
            $table->unsignedBigInteger('idlibro');
            $table->foreign('idcliente')->references('id')->on('clientes')->onDelete('cascade');
            $table->foreign('idlibro')->references('id')->on('libros')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('prestamos');
    }
};
