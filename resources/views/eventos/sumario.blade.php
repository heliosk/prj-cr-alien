@extends('eventos.layout')

@section('content')
<div class="jumbotron">
    <div class="row">
        <div class="col">
            <h3>Sumário - Evento alienígena</h3>
        </div>
    </div>

    <hr>

    <table class="table table-bordered table-hover">
        <tr>
            <th>Estado</th>
            <th>Total</th>
        </tr>
        @foreach($eventos as $evento)
        <tr>
            <td>{{ $evento->estado }}</td>
            <td>{{ $evento->total }}</td>
        </tr>
        @endforeach
    </table>

    <hr>

    <div class="row float-right">
        <a class="btn btn-sm btn-secondary" href="{{ route('eventos.index') }}"><i class="fas fa-arrow-left"></i>&nbsp;Voltar</a>
    </div>
</div>
@endsection
