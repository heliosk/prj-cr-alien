@extends('eventos.layout')

@section('content')

@if(count($errors) > 0)
<div class="alert alert-danger">
    <i>Atenção! Foram encontrados erros no formulário.</i><br>
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif

{!! Form::open(['route' => 'eventos.store', 'method' => 'POST']) !!}
@include('eventos.form', ['mainTitle' => 'Adicionar novo evento', 'type' => 'create'])
{!! Form::close() !!}

@endsection
