@extends('template.base')

@section('titulo')
	Cadastro de Campus
@stop

@section('pagina')
	Campus
@stop

@section('conteudo')
 
 @include('pages.campus.card.tableCampus')
 @include('pages.campus.button.button')

@stop()