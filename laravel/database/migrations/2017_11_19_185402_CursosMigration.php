<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CursosMigration extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('blocos', function (Blueprint $table) {
          $table->increments('id');
          $table->string('nomeBloco');
          $table->integer('qtdAndares');
          $table->integer('campus_id');
          $table->foreign('campus_id')->references('id')->on('campuses');
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
          Schema::dropIfExists('blocos');
    }
}
