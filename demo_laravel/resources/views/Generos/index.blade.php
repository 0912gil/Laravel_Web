@extends('Layout.template')

@section('title', 'Lista de Generos')

@section('content')
<div class="row">
    <h3>Lista de Generos</h3>
</div>
<div class="row">
    <div class="col-md-10">
        <a type="button" class="btn btn-primary btn-md" href="{{ route('generos.create') }}"> Nuevo genero</a>
    <br>
    @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif
    <br>
    <table class="table table-striped table-bordered table-hover" id="tabla">
        <thead>
            <tr>
                <th>Codigo del genero</th>
                <th>Nombre del genero</th>
                <th>Descripcion</th>
                <th>Operaciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($generos as $genero)
            <tr>
                <td>{{ $genero->codigo_genero }}</td>
                <td>{{ $genero->nombre_genero }}</td>
                <td>{{ $genero->descripcion }}</td>
                <td>
                <a title="Editar" class="btn btn-primary btn-circle" href="{{route('generos.edit',$genero->id)}}"><span class="glyphicon glyphicon-edit"></span></a>
                <a title="Eliminar"  class="btn btn-danger btn-circle" href="{{route('generos.destroy',$genero->id)}}"><span class="glyphicon glyphicon-trash"></span></a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    </div> 
</div>
<script>
    $(document).ready(function(){
        $('#tabla').DataTable();
    } );
</script>
@endsection