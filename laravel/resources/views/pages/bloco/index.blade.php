@extends('template.base')

@section('titulo')
Cadastro de Blocos
@stop

@section('pagina')
Bloco
@stop

@section('conteudo')

@include('pages.bloco.card.tableCampus')
@include('pages.bloco.button.button')

@stop()
