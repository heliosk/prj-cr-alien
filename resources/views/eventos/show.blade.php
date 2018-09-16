@extends('eventos.layout')

@section('content')
<div class="jumbotron">
    <div class="row">
        <div class="col">
            <h3>Evento alienígena</h3>
        </div>
    </div>

    <hr>

    <div class="row">
        <div class="form-group">
            <b>Cidade: </b>
            {{ $evento->cidade }}
        </div>
    </div>
    <div class="row">
        <div class="form-group">
            <b>Estado: </b>
            {{ $evento->estado }}
        </div>
    </div>
    <div class="row">
        <div class="form-group">
            <b>Data: </b>
            {{ $evento->data }}
        </div>
    </div>

    <hr>

    <div class="row">
        <a class="btn btn-sm btn-secondary" href="{{ route('eventos.index') }}"><i class="fas fa-arrow-left"></i>&nbsp;Voltar</a>
    </div>
</div>
@endsection
