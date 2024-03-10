@extends('layouts.master')
@section('titulo', 'Listado de chollos')

@section('content')
    </br>
    <a href="{{ route('chollos.create') }}" class="btn btn-success">
        <i class="bi bi-plus"></i> Añadir Chollo
    </a>
    </br></br></br>
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
                            onmouseover="this.style.color='#666666';" onmouseout="this.style.color='black'">
                            <h3>{{ $chollo->titulo }}</h3>
                        </a>
                        <p>{{ $chollo->descripcion }}</p>
                        <p><del>{{ $chollo->precio }}€</del></p>
                        <p><b>{{ $chollo->precio_descuento }}€</b></p>
                    </div>
                    <div class="col-md-2">
                        <div class="btn-group" role="group">
                            <a href="{{ route('chollos.show', $chollo->id) }}" class="btn btn-info mr-2">
                                <i class="bi bi-eye"></i> Ir al chollo
                            </a>
                            <a href="{{ route('chollos.edit', $chollo->id) }}" class="btn btn-warning mr-2">
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
@endsection
