<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCursosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cursos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('imagen_path', 150)->nullable();
            $table->string('portada_path', 150)->nullable();
            $table->string('nombre', 150);
            $table->string('slug', 250);
            $table->text('descripcion')->nullable();
            $table->longText('informacion')->nullable();
            $table->date('fecha_inicio')->nullable();
            $table->string('duracion', 150)->nullable();
            $table->string('turno', 150)->nullable();
            $table->string('modalidad', 150)->nullable();
            $table->text('brochure_path')->nullable();
            $table->text('video_beneficios')->nullable();
            $table->text('galeria_path')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cursos');
    }
}
