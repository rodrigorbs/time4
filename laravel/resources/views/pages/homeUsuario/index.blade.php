@extends('template.usuarioBase')
@section('titulo')
Localize
@stop

@section('conteudo')

<div class="row">
  <div class="col s12 m6">
    <div class="card">
      <div class="card-content">

        <a href="/consultarSala"><h3 align="center">Localizar Sala</h3></a>

      </div>
    </div>
  </div>

  <div class="col s12 m6">
    <div class="card">
      <div class="card-content">

        <a href="/consultarGrade"><h3 align="center">Consultar Grades</h3></a>

      </div>
    </div>
  </div>
</div>

@stop()
