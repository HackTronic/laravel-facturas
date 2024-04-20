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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('Nombre');
            $table->decimal('Precio', total: 8, places: 2);
            $table->string('Descripcion');

            $table->foreignId('Fk_id_establecimiento')
            ->references('id')
            ->on('establishments')
            ->onUpdate('cascade')
            ->onDelete('restrict');
            $table->date('Fecha_registro')->nullable();

            $table->foreignId('Fk_id_categoria')
            ->references('id')
            ->on('categories')
            ->onUpdate('cascade')
            ->onDelete('restrict');

            $table->string('Imagen');
            $table->boolean('Activos');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
