@extends('layouts.app')
@section('titulo', 'Cadastrar Bloco')
@section('subtitulo', 'Cadastrar Bloco')
@section('content')
<div class="row">
    <div class="col-md-8 col-md-offset-2">
      <form action="/bloco/salvar" method="post">
        {{ csrf_field() }}
        <div class="form-group">
        <label>Campus</label>
        <select class="form-control">
              <option value="Selecione">Selecione</option>
              <option value="Asa Sul">Asa Sul</option>
              <option value="Asa Norte">Asa Norte</option>
              <option value="Oeste">Oeste</option>
        </select>
        </div>
        <div class="form-group">
        <label>Bloco</label>
        <input type="text" class="form-control" name="bloco" size="60"/>
        </div>
        <div class="form-group">
        <label>N Andares</label>
        <input type="text" class="form-control" name="andares" size="60"/>
        </div>
        <button class="btn btn-primary">Salvar</button>
        <a href="/" class="btn btn-danger">Desistir</a>
      </form>
    </div>
    </div>
@endsection
