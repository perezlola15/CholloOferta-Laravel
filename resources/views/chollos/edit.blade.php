@extends('layouts.master')

@section('content')
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <h2>Editar Chollo</h2>

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
                    <input type="text" class="form-control" id="titulo" name="titulo" value="{{ $chollo->titulo }}" required>
                </div>

                <div class="form-group">
                    <label for="descripcion">Descripción:</label>
                    <textarea class="form-control" id="descripcion" name="descripcion" required>{{ $chollo->descripcion }}</textarea>
                </div>

                <div class="form-group">
                    <label for="descripcion">URL:</label>
                    <textarea class="form-control" id="url" name="url" required>{{ $chollo->url }}</textarea>
                </div>

                <div class="form-group">
                    <label for="categoria">Categoría:</label>
                    <textarea class="form-control" id="categoria" name="categoria" required>{{ $chollo->categoria }}</textarea>
                </div>

                <div class="form-group">
                    <label for="puntuacion">Puntuación:</label>
                    <textarea class="form-control" id="puntuacion" name="puntuacion" required>{{ $chollo->puntuacion }}</textarea>
                </div>

                <div class="form-group">
                    <label for="precio">Precio:</label>
                    <input type="number" class="form-control" id="precio" name="precio" required value="{{ $chollo->precio }}">
                </div>

                <div class="form-group">
                    <label for="precio_descuento">Precio con descuento:</label>
                    <input type="number" class="form-control" id="precio_descuento" name="precio_descuento" required value="{{ $chollo->precio_descuento }}">
                </div>

                <div class="form-group">
                    <div class="custom-control custom-switch">
                        <input type="hidden" name="disponible" value="0">
                        <input type="checkbox" class="custom-control-input" id="disponible" name="disponible" value="1" {{ old('disponible') ? 'checked' : '' }}>
                        <label class="custom-control-label" for="disponible">Disponible</label>
                    </div>
                </div>

                <button type="submit" class="btn btn-primary">Actualizar Chollo</button>
            </form>
        </div>
    </div>
@endsection
