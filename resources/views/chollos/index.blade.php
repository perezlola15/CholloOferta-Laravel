@extends('layouts.app')

@section('content')
    <h2>Listado de Chollos</h2>
    </br>

    <ul class="list-unstyled">
        @foreach ($chollos as $chollo)
            <li class="mb-4">
                <div class="row">
                    <div class="col-md-2">
                        <img src="{{ asset('img/' . $chollo->id . '-chollo-ofertas.jpg') }}" alt="Imagen del chollo"
                            class="img-fluid">
                    </div>
                    <div class="col-md-8">
                        <a href="{{ route('chollos.show', $chollo->id) }}" style="color: black"
                            onmouseover="this.style.color='blue';" onmouseout="this.style.color='black'">
                            <h3>{{ $chollo->titulo }}</h3>
                        </a>
                        <p>{{ $chollo->descripcion }}</p>
                    </div>
                    <div class="col-md-2">
                        <div class="btn-group" role="group">
                            <a href="{{ route('chollos.show', $chollo->id) }}" class="btn btn-info">
                                <i class="bi bi-eye"></i> Ver detalles
                            </a>
                            <a href="{{ route('chollos.edit', $chollo->id) }}" class="btn btn-warning">
                                <i class="bi bi-pencil"></i> Editar
                            </a>
                            <form action="{{ route('chollos.destroy', $chollo->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">
                                    <i class="bi bi-trash"></i> Borrar
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </li>
        @endforeach
    </ul>
    </br>
    <a href="{{ route('chollos.create') }}" class="btn btn-success">
        <i class="bi bi-plus"></i> Añadir Chollo
    </a>
@endsection
