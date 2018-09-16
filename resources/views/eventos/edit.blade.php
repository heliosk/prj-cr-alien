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

{!! Form::model($evento, ['route' => ['eventos.update',  $evento->id], 'method' => 'PATCH']) !!}
@include('eventos.form', ['mainTitle' => 'Editar evento', 'type' => 'update'])
{!! Form::close() !!}

@endsection
