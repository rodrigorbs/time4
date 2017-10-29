@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    Bem vindo!<br>

                    <a href="/grade" class="btn btn-primary">Consultar Grade</a>
                    <a href="/sala" class="btn btn-primary">Localizar Sala</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
