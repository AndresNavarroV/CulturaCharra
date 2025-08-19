@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>ROLES Y PERMISOS</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-header">
            <p>{{ $role->name }}</p>
        </div>

        <div class="card-body">
            <h5>LISTA DE PERMISOS</h5>

            <form action="{{ route('roles.update', $role) }}" method="POST">
                @csrf
                @method('PUT')

                @foreach ($permisos as $permiso)
                    <div class="form-check m-1">
                        <input class="form-check-input" type="checkbox" name="permisos[]" 
                               value="{{ $permiso->id }}"
                               id="permiso_{{ $permiso->id }}"
                               {{ $role->permissions->contains($permiso->id) ? 'checked' : '' }}>
                        <label class="form-check-label" for="permiso_{{ $permiso->id }}">
                            {{ $permiso->name }}
                        </label>
                    </div>
                @endforeach

                <button type="submit" class="btn btn-primary mt-3">Asignar Permisos</button>
            </form>
        </div>
    </div>
@stop


@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
