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
        Schema::create('libro', function (Blueprint $table) {
            $table->string('ISBN', 5);//varchar
            $table->string('nombre', 100);
            $table->text('descripcion');//text
            $table->string('generoLiterario', 100);
            $table->float('precioUnitario', 4, 2);//float
            $table->text('observacion');
            $table->string('foto', 10);
            $table->string('areaconocimiento', 5);

            $table->primary('ISBN'); //para definir la llave principal
            $table->foreign('areaconocimiento')->references('idArea')->on('areaconocimiento');//llave foranea
            $table->timestamps();//nos dice la hora y fecha que se hizo la accion
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('libro');
    }
};
