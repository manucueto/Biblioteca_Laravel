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
        Schema::create('libros', function (Blueprint $table) {
            $table->id();
            $table->string("nombre_libro");
            $table->string("nombres_autor");
            $table->string("fecha_nacimiento")->nullable();
            $table->string("fecha_fallecimiento");
            $table->string("genero_libro");
            $table->string("fecha_publicacion");
            $table->string("editorial");
            $table->string("foto_portada")->nullable();
            $table->timestamps();

          
          
         
         
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('libros');
    }
};
