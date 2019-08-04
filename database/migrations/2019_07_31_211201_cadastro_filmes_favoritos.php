<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CadastroFilmesFavoritos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cadastro_filmes_favoritos', function (Blueprint $table) {
            $table->unsignedBigInteger('cadastro_id')->unsigned();
            $table->foreign('cadastro_id')->references('id')->on('cadastros');
            $table->unsignedBigInteger('filme_favorito_id')->unsigned();
            $table->foreign('filme_favorito_id')->references('id')->on('filmes_favoritos');
            $table->unique(['filme_favorito_id','cadastro_id'],"cadastro_filmes_favoritos_foreing");
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
        Schema::dropIfExists('cadastro_filmes_favoritos');
    }
}
