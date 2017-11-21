@extends('template.base')

@section('titulo')
	Cadastro de Campus
@stop

@section('pagina')
	Formulario campus
@stop

@section('conteudo')

<div class="row">
    <form class="col s12" action="/campus/salvar" method="post">
			{{ csrf_field() }}
      <div class="row">
        <div class="col s2 m2">

        </div>
           <div class="col s8 m8">
            <div class="card hoverable">
              <div class="card-content">
                <div class="row">
                  <div class="input-field col s8">
                    <input name="idCampus" type="hidden" value="{{$campus->id}}">
                  </div>

                  <div class="input-field col s8">
                    <input name="nomeCampus" type="text" class="validate" value="{{$campus->nomeCampus}}">
                    <label for="last_name">Nome do Campus</label>
                  </div>

                  <div class="input-field col s6">
                    <input name="logradouro" type="text" class="validate" value="{{$campus->logradouro}}">
                    <label for="last_name">Logradouro</label>
                  </div>

                  <div class="input-field col s6">
                    <input name="cidade" type="text" class="validate" value="{{$campus->cidade}}">
                    <label for="last_name">Cidade</label>
                  </div>

                  <div class="input-field col s6">
                    <input name="cep" type="text" class="validate" value="{{$campus->cep}}">
                    <label for="last_name">CEP</label>
                  </div>

                  <div class="input-field col s2">
                    <input name="uf" type="text" class="validate" value="{{$campus->uf}}">
                    <label for="last_name">UF</label>
                  </div>


                  <div class="input-field col s6">
                    <input name="telefone" type="text" class="validate" value="{{$campus->telefone}}">
                    <label for="last_name">Telefone</label>
                  </div>

                </div>

              </div>
              <div class="card-action">
                <button class="green darken-2 waves-light btn">
                  <i>Gravar</i>
                </button>
                <a href="/campus" class="red lighten-2 waves-light btn"><i>Cancelar</i></a>

              </div>
            </div>
          </div>
          <div class="col s2 m2">

          </div>
      </div>


      <!-- Teste -->

    </form>
  </div>

@stop()
