<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::table('materias', function (Blueprint $table) {
            $table->foreignId('aula_id')->constrained()->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::table('materias', function (Blueprint $table) {
            $table->dropForeign(['aula_id']);
            $table->dropColumn('aula_id');
        });
    }
};
