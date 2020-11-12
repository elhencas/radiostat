<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Radiostat extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('artistas', function (Blueprint $table) {
            $table->id();
            $table->string('nombreartista');
            $table->timestamps();
        });

         Schema::create('categorias', function (Blueprint $table) {
            $table->id();
            $table->string('nombrecategoria');
            $table->timestamps();
        });

        Schema::create('generos', function (Blueprint $table) {
            $table->id();
            $table->string('nombregenero');
            $table->timestamps();
        });

        Schema::create('canciones', function (Blueprint $table) {
            $table->id();
            $table->string('nombrecancion');
            $table->integer('idartista');
            $table->integer('idgenero');
            $table->integer('idcategoria');
            $table->timestamps();
        });

         Schema::create('estadisticas', function (Blueprint $table) {
            $table->id();
            $table->integer('idcancion');
            $table->timestamp('fecha',0);
            $table->string('solicitadopor');
            $table->string('lugar');
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
        //
        Schema::dropIfExists('artistas');
        Schema::dropIfExists('categorias');
        Schema::dropIfExists('generos');
        Schema::dropIfExists('canciones');
        Schema::dropIfExists('estadisticas');
    }
}
