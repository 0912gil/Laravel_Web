@extends('Layout.template')

@section('title', 'Lista de Editoriales')

@section('css')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.0/css/dataTables.bootstrap5.min.css">
@endsection

@section('content')
<div class="row">
    <h3>Lista de editoriales</h3>
</div>
<div class="row">
    <div class="col-md-10">
        <a type="button" class="btn btn-primary btn-md" href="{{ route('editoriales.create') }}"> Nuevo editorial</a>
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
                <th>Codigo del editorial</th>
                <th>Nombre del editorial</th>
                <th>Contacto</th>
                <th>Telefono</th>
                <th>Operaciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($editoriales as $editorial)
            <tr>
                <td>{{ $editorial->codigo_editorial }}</td>
                <td>{{ $editorial->nombre_editorial }}</td>
                <td>{{ $editorial->contacto }}</td>
                <td>{{ $editorial->telefono }}</td>
                <td>
                <a title="Editar" class="btn btn-primary btn-circle" href="{{route('editoriales.edit',$editorial->id)}}"><span class="glyphicon glyphicon-edit"></span></a>
                <a title="Eliminar"  class="btn btn-danger btn-circle" href="{{route('editoriales.destroy',$editorial->id)}}"><span class="glyphicon glyphicon-trash"></span></a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    @section('js')
      <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
      <script src="https://cdn.datatables.net/1.12.0/js/jquery.dataTables.min.js"></script>
      <script src="https://cdn.datatables.net/1.12.0/js/dataTables.bootstrap5.min.js"></script>
      <script>
        $(document).ready(function () {
            $('#tabla').DataTable();
        });
      </script>
    @endsection
    </div> 
</div>
@endsection