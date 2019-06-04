<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CriarTabelaMatriculas extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('matriculas', function (Blueprint $table) {
      $table->increments('id');
      $table->string('data_matricula');
      $table->enum('status', ['A', 'B', 'C', 'D', 'F', 'T'])->default('A');
      $table->integer('curso_id')->unsigned()->nullable();;
      $table->integer('aluno_id')->unsigned()->nullable();;

      $table->foreign('curso_id')->references('id')->on('cursos');
      $table->foreign('aluno_id')->references('id')->on('alunos');
    });
  }

  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down()
  {
    Schema::dropIfExists('matriculas');
  }
}
