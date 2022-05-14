@extends('layout.template')

@section('title', 'Nuevo Autor')

@section('content')
<div class="row">
    <h3>Nuevo Autor</h3>
</div>
<div class="row">
    <div class=" col-md-7">
        <form role="form" action="{{ route('autores.store') }}" method="POST">
            @csrf
            <div class="well well-sm"><strong><span class="glyphicon glyphicon-asterisk"></span>Campos requeridos</strong></div>
            <div class="form-group">
                <label for="codigo">Codigo del autor:</label>
                <div class="input-group">
                    <input type="text" class="form-control" name="codigo_autor" id="codigo_autor" value="{{ old('codigo_autor') }}" placeholder="Ingresa el codigo del autor" >
                    <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                </div>
                @error('codigo_autor')
                   <span class="error text-danger"> {{ $message }}</span>
                @enderror
            </div>
            <div class="form-group">
                <label for="nombre">Nombre del autor:</label>
                <div class="input-group">
                    <input type="text" class="form-control" name="nombre_autor" id="nombre_autor" value="{{ old('nombre_autor') }}" placeholder="Ingresa el nombre del autor" >
                    <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                </div>
                @error('nombre_autor')
                   <span class="error text-danger"> {{ $message }}</span>
                @enderror
            </div>
            <div class="form-group">
                <label for="nacionalidad">Nacionalidad:</label>
                <div class="input-group">
                    <input type="text" class="form-control" id="nacionalidad" name="nacionalidad" value="{{ old('nacionalidad') }}" placeholder="Ingresa lanacionalidad">
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
