<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Bloco extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('blocos', function (Blueprint $table) {
          $table->increments('idBlocos');
          $table->string('nameBlocos');
          $table->integer('qtdAndares');
          $table->integer('campus_idCampus');
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
