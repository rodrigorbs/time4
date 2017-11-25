@extends('template.base')

@section('titulo')
	Cadastro de Bloco
@stop

@section('pagina')
	Formulario Bloco
@stop

@section('conteudo')

<div class="row">
    <form class="col s12" action="/bloco/salvar" method="post">
			{{ csrf_field() }}
      <div class="row">
        <div class="col s2 m2">

        </div>
           <div class="col s8 m8">
            <div class="card hoverable">
              <div class="card-content">
                <div class="row">

                  <label>Campus</label>
                  <select class="browser-default" name="campus_id">
											<option value="" disabled selected>Selecione</option>
										@foreach ($campuses as $campus)

                    <option value="{{$campus->id}}">{{$campus->nomeCampus}}</option>
										@endforeach
                  </select>

                  <div class="input-field col s6">
                    <input name="nomeBloco" type="text" class="validate">
                    <label for="last_name">BLoco</label>
                  </div>

                  <div class="input-field col s2">
                    <input name="qtdAndares" type="text" class="validate">
                    <label for="last_name">QTD Andares</label>
                  </div>

                </div>

              </div>
              <div class="card-action">
                <button class="green darken-2 waves-light btn">
                  <i>Gravar</i>
                </button>
                <a href="/bloco" class="red lighten-2 waves-light btn"><i>Cancelar</i></a>

              </div>
            </div>
          </div>
          <div class="col s2 m2">

          </div>
      </div>
    </form>
  </div>

@stop()
