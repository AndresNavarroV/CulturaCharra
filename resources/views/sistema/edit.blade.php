@extends('layouts.plantilla_base_user')

@section('contenido')

<h2>Editar usuario</h2>

<form action="{{ route('sistema.update', $gente->id) }}" method="POST">
    @csrf
    @method('PUT')

    <div class="mb-3">
        <label for="name" class="form-label">Nombre</label>
        <input type="text" id="name" name="name" class="form-control" required value="{{ old('name', $gente->name) }}">
    </div>

    <div class="mb-3">
        <label for="email" class="form-label">Correo electrónico</label>
        <input type="email" id="email" name="email" class="form-control" required value="{{ old('email', $gente->email) }}">
    </div>

    <div class="mb-3">
        <label for="password" class="form-label">Contraseña</label>
        <input type="password" id="password" name="password" class="form-control">
    </div>

    <div class="mb-3">
        <label for="password_confirmation" class="form-label">Confirmar contraseña</label>
        <input type="password" id="password_confirmation" name="password_confirmation" class="form-control">
    </div>

    <div class="mb-3">
        <label for="rol" class="form-label">Rol</label>
        <select id="rol" name="rol" class="form-control" required>
            <option value="cliente" {{ old('rol', $gente->rol) == 'cliente' ? 'selected' : '' }}>Cliente</option>
            <option value="usuario" {{ old('rol', $gente->rol) == 'usuario' ? 'selected' : '' }}>Usuario</option>
            <option value="admin" {{ old('rol', $gente->rol) == 'admin' ? 'selected' : '' }}>Administrador</option>
        </select>
    </div>

    <a href="{{ route('sistema.index') }}" class="btn btn-danger">Cancelar</a>
    <button type="submit" class="btn btn-success">Guardar</button>
</form>

@endsection
