@extends('template.base')

@section('titulo')
	Cadastro de Bloco
@stop

@section('pagina')
	Formulario Bloco
@stop

@section('conteudo')
    @foreach ($campus as $ncampus)
          <option value= "{{$ncampus->id}}">{{$ncampus->nomeCampus}}</option>
    @endforeach

    {{Form::open(['action' => 'BlocoController@store'])}}
    {{Form::label('Bloco', 'nameBlocos')}}
    {{Form::text('nameBlocos','',['class'=>'form-control','required','placeholder' => nameBlocos])}}
    {{Form::submit('Cadastrar',['class'=>'btn btn-default'])}}
    {{Form::close()}}
@endsection
