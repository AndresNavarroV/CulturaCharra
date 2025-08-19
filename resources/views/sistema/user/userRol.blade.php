@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>USUARIOS Y ROLES</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-header">
            <p>{{ $user->name }}</p>
        </div>

        <div class="card-body">
            <h5>LISTA DE PERMISOS</h5>

            <form action="{{ route('asignar.update', $user) }}" method="POST">
                @csrf
                @method('PUT')

                @foreach ($roles as $role)
                    <div class="form-check m-1">
                        <input class="form-check-input" type="checkbox" name="roles[]" 
                            value="{{ $role->id }}"
                            id="role_{{ $role->id }}"
                            {{ $user->roles->contains($role->id) ? 'checked' : '' }}>
                        <label class="form-check-label" for="role_{{ $role->id }}">
                            {{ $role->name }}
                        </label>
                    </div>
                @endforeach


                <button type="submit" class="btn btn-primary mt-3">Asignar Roles</button>
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
