@extends('template.base')

@section('titulo')
Cadastro de Grades
@stop

@section('pagina')
Grade
@stop

@section('conteudo')

@include('pages.grade.card.tableGrade')
@include('pages.grade.button.button')

@stop()
