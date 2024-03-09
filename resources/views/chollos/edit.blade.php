@extends('layouts.master')
@section('titulo', 'Editar un chollo')

@section('content')
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <h2>Editar Chollo</h2><br />

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form action="{{ route('chollos.update', $chollo->id) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="form-group">
                    <label for="titulo">Título:</label>
                    <input type="text" class="form-control" id="titulo" name="titulo" value="{{ $chollo->titulo }}">
                </div>

                <div class="form-group">
                    <label for="descripcion">Descripción:</label>
                    <textarea class="form-control" id="descripcion" name="descripcion">{{ $chollo->descripcion }}</textarea>
                </div>

                <div class="form-group">
                    <label for="descripcion">URL:</label>
                    <input type="text" class="form-control" id="url" name="url" value="{{ $chollo->url }}">
                </div>

                <div class="form-group">
                    <label for="categoria">Categoría:</label>
                    <input type="text" class="form-control" id="categoria" name="categoria" value="{{ $chollo->categoria }}">
                </div>

                <div class="form-group">
                    <label for="puntuacion">Puntuación:</label>
                    <input type="number" class="form-control" id="puntuacion" name="puntuacion" value="{{ $chollo->puntuacion }}">
                </div>

                <div class="form-group">
                    <label for="precio">Precio:</label>
                    <input type="number" class="form-control" id="precio" name="precio" value="{{ $chollo->precio }}">
                </div>

                <div class="form-group">
                    <label for="precio_descuento">Precio con descuento:</label>
                    <input type="number" class="form-control" id="precio_descuento" name="precio_descuento" value="{{ $chollo->precio_descuento }}">
                </div>

                <div class="form-group">
                    <div class="custom-control custom-switch">
                        <input type="hidden" name="disponible" value="0">
                        <input type="checkbox" class="custom-control-input" id="disponible" name="disponible" value="1" {{ old('disponible') ? 'checked' : '' }}>
                        <label class="custom-control-label" for="disponible">Disponible</label>
                    </div>
                </div>

                <button type="submit" class="btn btn-primary">Actualizar chollo</button>
            </form>
        </div>
    </div>
@endsection
