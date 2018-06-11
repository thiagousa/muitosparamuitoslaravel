<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('funcionarios', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nome');
            $table->timestamps();
        });
        Schema::create('funcoes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('funcao');
            $table->timestamps();
        });
        Schema::create('funcionarios_funcoes', function (Blueprint $table) {

           $table->integer('id_funcionario')->unsigned();
           $table->foreign('id_funcionario')->references('id')->on('funcionarios')->onDelete('cascade');

            $table->integer('id_funcao')->unsigned();
            $table->foreign('id_funcao')->references('id')->on('funcoes')->onDelete('cascade');

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
        Schema::dropIfExists('funcionarios');
        Schema::dropIfExists('funcoes');
        Schema::dropIfExists('funcionarios_funcoes');

    }
}
