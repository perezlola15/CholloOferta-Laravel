@extends('layouts.master')

@section('content')
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <h2>Crear Nuevo Chollo</h2>

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form action="{{ route('chollos.store') }}" method="POST">
                @csrf

                <div class="form-group">
                    <label for="titulo">Título:</label>
                    <input type="text" class="form-control" id="titulo" name="titulo">
                </div>

                <div class="form-group">
                    <label for="descripcion">Descripción:</label>
                    <textarea class="form-control" id="descripcion" name="descripcion"></textarea>
                </div>

                <div class="form-group">
                    <label for="url">URL:</label>
                    <input type="url" class="form-control" id="url" name="url">
                </div>

                <div class="form-group">
                    <label for="categoria">Categoría:</label>
                    <input type="text" class="form-control" id="categoria" name="categoria">
                </div>

                <div class="form-group">
                    <label for="puntuacion">Puntuación:</label>
                    <input type="number" class="form-control" id="puntuacion" name="puntuacion">
                </div>

                <div class="form-group">
                    <label for="precio">Precio:</label>
                    <input type="number" class="form-control" id="precio" name="precio">
                </div>

                <div class="form-group">
                    <label for="precio_descuento">Precio con descuento:</label>
                    <input type="number" class="form-control" id="precio_descuento" name="precio_descuento">
                </div>

                <div class="form-group">
                    <div class="custom-control custom-switch">
                        <input type="hidden" name="disponible" value="0">
                        <input type="checkbox" class="custom-control-input" id="disponible" name="disponible" value="1" {{ old('disponible') ? 'checked' : '' }}>
                        <label class="custom-control-label" for="disponible">Disponible</label>
                    </div>
                </div>

                <button type="submit" class="btn btn-primary">Crear Chollo</button>
            </form>
        </div>
    </div>
@endsection
