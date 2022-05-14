@extends('layout.template')

@section('title', 'Editando Autor')

@section('content')
<div class="row">
    <h3>Editar Autor</h3>
</div>
<div class="row">
    <div class=" col-md-7">
        <form role="form" action="{{ route('autores.update',$autor->id) }}" method="POST">
            @csrf
            <input type="hidden" name="id" value="{{ $autor->id }}"/>
            <div class="well well-sm"><strong><span class="glyphicon glyphicon-asterisk"></span>Campos requeridos</strong></div>
            <div class="form-group">
                <label for="codigo">Codigo del autor:</label>
                <div class="input-group">
                    <input type="text" class="form-control" name="codigo_autor" id="codigo_autor" value="{{ $autor->codigo_autor }}" placeholder="Ingresa el codigo del genero" >
                    <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                </div>
                @error('codigo_autor')
                   <span class="error text-danger"> {{ $message }}</span>
                @enderror
            </div>
            <div class="form-group">
                <label for="nombre">Nombre del autor:</label>
                <div class="input-group">
                    <input type="text" class="form-control" name="nombre_autor" id="nombre_autor" value="{{ $autor->nombre_autor }}" placeholder="Ingresa el nombre del autor" >
                    <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                </div>
                @error('nombre_autor')
                   <span class="error text-danger"> {{ $message }}</span>
                @enderror
            </div>
            <div class="form-group">
                <label for="nacionalidad">Nacionalidad:</label>
                <div class="input-group">
                    <input type="text" class="form-control" id="nacionalidad" name="nacionalidad" value="{{ $autor->nacionalidad }}" placeholder="Ingresa el nombre del nacionalidad">
                    <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                </div>
                @error('nacionalidad')
                   <span class="error text-danger"> {{ $message }}</span>
                @enderror
            </div>
            <input type="submit" class="btn btn-info" value="Guardar" name="Guardar">
            <a class="btn btn-danger" href="">Cancelar</a>
        </form>
    </div>
</div>  
@endsection
