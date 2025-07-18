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
        Schema::table('libros', function (Blueprint $table) {
            //
            Schema::table('libros', function (Blueprint $table) {
                $table->string('categoria');
                $table->boolean('estado_libro');
            });
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('libros', function (Blueprint $table) {
            //
            Schema::table('libros', function (Blueprint $table) {
                $table->dropColumn('categoria');
                $table->dropColumn('estado_libro');
            });
        });
    }
};
