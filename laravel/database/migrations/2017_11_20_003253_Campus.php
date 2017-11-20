<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Campus extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('campuses', function (Blueprint $table) {
          $table->increments('idCampus');
          $table->string('nomeCampus');
          $table->string('logradouro');
          $table->string('cidade');
          $table->string('cep');
          $table->string('uf');
          $table->string('telefone');
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
        //
    }
}
