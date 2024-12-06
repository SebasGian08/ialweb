<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNovedadsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('novedads', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('imagen_path', 150);
            $table->string('categoria', 150);
            $table->string('nombre', 150);
            $table->string('slug', 250);
            $table->date('fecha');
            $table->text('descripcion')->nullable();
            $table->longText('informacion')->nullable();
            $table->boolean('visible')->default(true);
            $table->bigInteger('vista')->default(0);

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
        Schema::dropIfExists('novedads');
    }
}
