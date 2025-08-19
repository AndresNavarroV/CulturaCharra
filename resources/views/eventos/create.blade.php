@extends('layouts.plantilla_base_eventos')

@section('contenido')


<!-- Botón Cancelar arriba a la derecha -->
<div class="d-flex justify-content-end mb-3">
    <a href="/eventos" class="btn btn-outline-danger">Cancelar</a>
</div>

<!-- Título -->
<h2 class="mb-4">Crear registro de evento</h2>

<!-- Formulario para crear evento -->
<form action="{{ url('/eventos') }}" method="post">
    @csrf  <!-- Token de seguridad para evitar ataques CSRF -->
    @include('eventos.form', ['modo' => 'Crear'])
</form>

@endsection
