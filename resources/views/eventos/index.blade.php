@extends('eventos.layout')

@section('content')
<div class="jumbotron">
    <div class="row">
        <div class="col-lg-12">
            <h3>Lista de ocorrências alienígenas</h3>
            <hr>
        </div>
    </div>
    <br/>
    <div class="row">
        <div class="col-sm-12">
            <div class="float-right">
                <a class="btn btn-sm btn-secondary" href="{{ route('eventos.create') }}"><i class="fas fa-plus"></i>&nbsp;Adicionar nova ocorrência</a>
            </div>
        </div>
    </div>
    <br/>
    @if ($message = Session::get('success'))
    <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div>
    @endif


    @if (count($eventos) > 0)

        <table class="table table-bordered table-hover table-responsive text-nowrap">
            <tr>
                <th>#</th>
                <th width="100%">Cidade</th>
                <th>Estado</th>
                <th>Data</th>
                <th>Opções</th>
            </tr>

            @foreach ($eventos as $evento)
            <tr>
                <td>{{ ++$i }}</td>
                <td>{{ $evento->cidade }}</td>
                <td>{{ $evento->estado }}</td>
                <td>{{ date('d/m/Y', strtotime($evento->data)) }}</td>
                <td>
                    <a class="btn btn-sm btn-secondary" href="{{ route('eventos.show', $evento->id) }}" title="Exibir"><i class="fas fa-search"></i></a>
                    <a class="btn btn-sm btn-secondary" href="{{ route('eventos.edit', $evento->id) }}" title="Editar"><i class="far fa-edit"></i></a>

                    {!! Form::open(['method' => 'DELETE', 'route'=>['eventos.destroy', $evento->id], 'style'=> 'display:inline']) !!}
                    {!! Form::submit('Remover', ['class'=> 'btn btn-sm btn-danger']) !!}
                    {!! Form::close() !!}
                </td>
            </tr>
            @endforeach
        </table>
        {!! $eventos->links() !!}

    @else

        <p><i>Nenhum evento alienígena cadastrado</i></p>

    @endif
</div>
@endsection
