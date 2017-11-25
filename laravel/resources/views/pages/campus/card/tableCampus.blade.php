<div class="row">
     <div class="col s4 m4">
        @foreach ($campuses as $campus)
      <div class="card hoverable">
        <div class="card-content">
          <div class="row">
          	<div class="col s6 m6">
          		<p><strong>Campus</strong></p>
          		{{$campus->nomeCampus}}
          	</div>

          	<div class="col s6 m6">
          		<p><strong>Logradouro</strong></p>
          		{{$campus->logradouro}}
          	</div>

          	<div class="col s6 m6">
          		<p><strong>Cidade</strong></p>
          		{{$campus->cidade}}
          	</div>

          	<div class="col s6 m6">
          		<p><strong>Uf</strong></p>
          		{{$campus->uf}}
          	</div>

          	<div class="col s6 m6">
          		<p><strong>Cep</strong></p>
          		{{$campus->cep}}
          	</div>

          	<div class="col s6 m6">
          		<p><strong>Fone</strong></p>
          		{{$campus->telefone}}
          	</div>
          </div>

        </div>
        <div class="card-action">
	        <a href="/campus/{{$campus->id}}/editar">  <i class="material-icons">edit</i></a>
	        <a href="/campus/{{$campus->id}}/remover" onclick="return confirm('Deseja remover o campus {{$campus->nomeCampus}}?');">  <i class="material-icons">delete</i></a>
        </div>
      </div>
      @endforeach
    </div>
</div>
