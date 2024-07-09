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
        //
        Schema::create("materia",function(BluePrint $table){
            $table->engine = 'InnoDB';
            $table->id();
            $table->unsignedBigInteger('horario_id');
            $table->string("nombre_materia");
            $table->string("edificio");

            $table->foreign('horario_id')->references('id')->on('horario');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
