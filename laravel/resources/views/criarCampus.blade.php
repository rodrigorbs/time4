@extends('layouts.app')
@section('titulo', 'Cadastrar Campus')
@section('subtitulo', 'Cadastrar Campus')
@section('content')
<div class="row">
    <div class="col-md-8 col-md-offset-2">
      <form action="/campus/salvar" method="post">
        {{ csrf_field() }}
        <div class="form-group">
        <label>Campus</label>
        <input type="text" class="form-control" name="campus"/>
        </div>
        <div class="form-group">
        <label>Logadouro</label>
        <input type="text" class="form-control" name="bloco" size="60"/>
        </div>
        <div class="form-group">
        <label>Complemento</label>
        <input type="text" class="form-control" name="andares" size="60"/>
        </div>
          <div class="form-group">
            <label>Cidade</label>
            <input type="text" class="form-control" name="cidade" size="60"/>
        <label>UF</label>
        <select class="form-control">
              <option value="Selecione">Selecione</option>
              <option value="DF">DF</option>
              <option value="SP">SP</option>
              <option value="GO">GO</option>
        </select>
         </div>
         <div class="form-group">
         <label>CEP</label>
         <input type="text" class="form-control" name="cep" size="60"/>
         <label>Telefone</label>
         <input type="text" class="form-control" name="telefone" size="60"/>
         </div>
        <button class="btn btn-primary">Salvar</button>
        <a href="/" class="btn btn-danger">Desistir</a>
      </form>
    </div>
    </div>
@endsection
