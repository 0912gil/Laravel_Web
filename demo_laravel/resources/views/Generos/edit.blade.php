@extends('layout.template')

@section('title', 'Editando Genero')

@section('content')
<div class="row">
    <h3>Editar Genero</h3>
</div>
<div class="row">
    <div class=" col-md-7">
        <form role="form" action="{{ route('generos.update',$genero->id) }}" method="POST">
            @csrf
            <input type="hidden" name="id" value="{{ $genero->id }}"/>
            <div class="well well-sm"><strong><span class="glyphicon glyphicon-asterisk"></span>Campos requeridos</strong></div>
            <div class="form-group">
                <label for="codigo">Codigo del genero:</label>
                <div class="input-group">
                    <input type="text" class="form-control" name="codigo_genero" id="codigo_genero" value="{{ $genero->codigo_genero }}" placeholder="Ingresa el codigo del genero" >
                    <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                </div>
                @error('codigo_genero')
                   <span class="error text-danger"> {{ $message }}</span>
                @enderror
            </div>
            <div class="form-group">
                <label for="nombre">Nombre del genero:</label>
                <div class="input-group">
                    <input type="text" class="form-control" name="nombre_genero" id="nombre_genero" value="{{ $genero->nombre_genero }}" placeholder="Ingresa el nombre del genero" >
                    <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                </div>
                @error('nombre_genero')
                   <span class="error text-danger"> {{ $message }}</span>
                @enderror
            </div>
            <div class="form-group">
                <label for="descripcion">Descripcion:</label>
                <div class="input-group">
                    <input type="text" class="form-control" id="descripcion" name="descripcion" value="{{ $genero->descripcion }}" placeholder="Ingresa el nombre del descripcion">
                    <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                </div>
                @error('descripcion')
                   <span class="error text-danger"> {{ $message }}</span>
                @enderror
            </div>
            <input type="submit" class="btn btn-info" value="Guardar" name="Guardar">
            <a class="btn btn-danger" href="">Cancelar</a>
        </form>
    </div>
</div>  
@endsection
