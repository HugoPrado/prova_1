<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFilmesFavoritosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('filmes_favoritos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('titulo');
            $table->date('ano_de_lancamento')->nullable();
            $table->string('diretor')->nullable();
            $table->timestamps();
            $table->softDeletes();
            // titulo do filme, ano de lancamento, diretor
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('filmes_favoritos');
    }
}
