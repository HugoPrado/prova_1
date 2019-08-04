<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCadastrosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cadastros', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nome');
            $table->string('sobrenome');
            $table->string('titulacao')->nullable();
            $table->string('CPF');
            $table->string('RG')->nullable();
            $table->string('email')->nullable();
            $table->timestamps();
            $table->softDeletes();
            //nome, sobrenome, titulacao, CPF, RG
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cadastros');
    }
}
