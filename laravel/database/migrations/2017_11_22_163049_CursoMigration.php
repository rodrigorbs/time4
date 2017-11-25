<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CursoMigration extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('cursos', function (Blueprint $table) {
          $table->increments('id');
          $table->string('nomeCurso');
          $table->timestamps();
      });

      $curso1 = new App\Cursos();
      $curso1->nomeCurso = 'Analise e Desenvolvimento de Sistemas';
      $curso1->save();

      $curso2 = new App\Cursos();
      $curso2->nomeCurso = 'Ciencias da Computação';
      $curso2->save();

      $curso3 = new App\Cursos();
      $curso3->nomeCurso = 'Administração';
      $curso3->save();

      $curso4 = new App\Cursos();
      $curso4->nomeCurso = 'Arquitetura e Urbanismo';
      $curso4->save();

      $curso5 = new App\Cursos();
      $curso5->nomeCurso = 'Direito';
      $curso5->save();

      $curso6 = new App\Cursos();
      $curso6->nomeCurso = 'Enfermagem';
      $curso6->save();

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
