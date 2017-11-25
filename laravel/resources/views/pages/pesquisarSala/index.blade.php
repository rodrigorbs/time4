@extends('template.usuarioBase')
@section('titulo')
Localize
@stop

@section('conteudo')
<div class="row">
    <form class="col s12">
      <div class="row">
        <div class="col s2 m2">

        </div>
           <div class="col s8 m8">
            <div class="card hoverable">
              <div class="card-content">
                <div class="row">

                  <label>Campus</label>
                  <select class="browser-default">
                    <option value="" disabled selected>Selecione</option>
                    <option value="1">Option 1</option>
                    <option value="2">Option 2</option>
                    <option value="3">Option 3</option>
                  </select>

                  <label>Bloco</label>
                  <select class="browser-default">
                    <option value="" disabled selected>Selecione</option>
                    <option value="1">Option 1</option>
                    <option value="2">Option 2</option>
                    <option value="3">Option 3</option>
                  </select>

                  <div class="input-field col s6">
                    <input id="cep" type="text" class="validate">
                    <label for="last_name">Nome da Sala</label>
                  </div>
                </div>

              </div>
              <div class="card-action">
                <a class="green darken-2 waves-light btn">
                  <i>Localizar</i>
                </a>
                <a href="/usuario" class="red lighten-2 waves-light btn"><i>Cancelar</i></a>

              </div>
            </div>
          </div>
      </div>

    </form>
  </div>
@stop()
