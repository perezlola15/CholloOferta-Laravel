@extends('layouts.master')

@section('content')
    <div class="row">
        <div class="col-md-8">
            <h2>{{ $chollo->titulo }}</h2>
            <p class="text-muted">{{ $chollo->categoria }}</p>
            <p>{{ $chollo->descripcion }}</p>
            <p>Precio: {{ $chollo->precio }} €</p>
            <p>Precio con descuento: {{ $chollo->precio_descuento }} €</p>
            <p>Puntuación: {{ $chollo->puntuacion }}</p>
        </div>
        <div class="col-md-4">
            <img src="{{ asset('img/' . $chollo->id . '-chollo-ofertas.jpg') }}" alt="Imagen del Chollo" class="img-fluid">
        </div>
    </div>
    <div class="mt-4">
        <a href="{{ route('chollos.index') }}" class="btn btn-secondary">Volver al inicio</a>
    </div>
@endsection
