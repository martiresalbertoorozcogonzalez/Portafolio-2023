<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create('quiensoys', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->text('descripcion');
            $table->string('imagen_quiensoy');
            $table->timestamps();
        });

        Schema::create('categorias', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->text('descripcion');
            $table->timestamps();
        });

        Schema::create('habilidads', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->text('descripcion');
            $table->string('imagen_habilidad');
            $table->timestamps();
        });

        Schema::create('certificacions', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->text('descripcion');
            $table->string('imagen_certificacion');
            $table->timestamps();
        });

        Schema::create('portafolios', function (Blueprint $table) {
            
            $table->id();
            $table->string('nombre');
            $table->text('descripcion');
            $table->string('imagen_portafolio');
                   
            $table->foreignId('categoria_id')->constrained()->onDelete('cascade');
            $table->bigInteger('habilidad_id')->unsigned();
            
            $table->foreign('habilidad_id')->references('id')->on('habilidads')
            ->onDelete('cascade')
            ->onUpdate('cascade');

            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('portafolios');
        Schema::dropIfExists('categorias');
        Schema::dropIfExists('quiensoys');
        Schema::dropIfExists('habilidads');
        Schema::dropIfExists('certificacions');
    }
};
