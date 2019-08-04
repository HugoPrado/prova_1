<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CadastroEndereco extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cadastro_endereco', function (Blueprint $table) {
            $table->unsignedBigInteger('cadastro_id')->unsigned();
            $table->foreign('cadastro_id')->references('id')->on('cadastros')->onDelete('cascade');
            $table->unsignedBigInteger('endereco_id')->unsigned();
            $table->foreign('endereco_id')->references('id')->on('enderecos')->onDelete('cascade');
            $table->unique(['endereco_id','cadastro_id'],"cadastro_endereco_foreing");
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
        Schema::dropIfExists('cadastro_endereco');
    }
}
