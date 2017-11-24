<div class="row">
     <div class="col s4 m4">
       @foreach ($blocos as $bloco)

       <?php $id = $bloco->campus_id;
        $campus_bloco = App\Campus::find($id);?>

      <div class="card hoverable">
        <div class="card-content">
          <div class="row">
          	<div class="col s6 m6">
          		<p><strong>Campus</strong></p>
          		{{$campus_bloco->nomeCampus}}
          	</div>

          	<div class="col s6 m6">
          		<p><strong>Bloco</strong></p>
          		{{$bloco->nomeBloco}}
          	</div>

          	<div class="col s6 m6">
          		<p><strong>QTD Andares</strong></p>
          		{{$bloco->qtdAndares}}
          	</div>

          </div>
        </div>

        <div class="card-action">
	        <a href="/bloco/{{$bloco->id}}/editar">  <i class="material-icons">edit</i></a>
	        <a href="/bloco/{{$bloco->id}}/remover"  onclick="return confirm('Deseja remover o bloco {{$bloco->nomeBloco}}?');">  <i class="material-icons">delete</i></a>
        </div>
      </div>
      @endforeach
    </div>
</div>
