@extends('template.base')

@section('titulo')
	Cadastro de Bloco
@stop

@section('pagina')
	Formulario Bloco
@stop

@section('conteudo')

<label>Campus</label>
@if (count($campus) > 1)
@foreach ($campus as $ncampus)
			<select class="browser-default" name="selecao">
							<option value= "{{$ncampus->id}}">{{$ncampus->nameCampus}}</option>
      </select>
@endforeach

@else
<select class="browser-default" name="selecao">
		<option value="" disabled selected>Selecione</option>
</select>

@endif

{{Form::open(['action' => 'BlocoController@store','method' => 'post'])}}
{{Form::label('Bloco', 'Nome do Bloco')}}
{{Form::text('nameBlocos','',['class'=>'form-control','required','placeholder' => 'Digite aqui'])}}
{{Form::label('Andares', 'Quantidade de Andares')}}
{{Form::text('qtdAndares','',['class'=>'form-control','required','placeholder' => 'Digite aqui'])}}
{{Form::submit('Cadastrar',['class'=>'btn btn-default'])}}
{{Form::close()}}

@stop
