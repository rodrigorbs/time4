@extends('template.base')

@section('titulo')
Cadastro de Salas
@stop

@section('pagina')
Salas
@stop

@section('conteudo')

@include('pages.sala.card.tableSala')
@include('pages.sala.button.button')

@stop()
