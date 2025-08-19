@extends('adminlte::page')

@section('title', 'Usuarios')

@section('content_header')
    <h1>Lista de Usuarios</h1>

    <a href="{{ url('sistema/create') }}" class="btn btn-secondary">Crear usuario</a>
@stop

@section('content')

@if (Session::has('mensaje'))
  <div class="alert alert-success mt-3">
    {{ Session::get('mensaje') }}
  </div>
@endif

<table id="usuarios" class="table table-bordered table-striped shadow-lg mt-3" style="width:100%">
    <thead class="bg-primary text-dark">
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Correo</th>
            <th>Rol</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($gentes as $gente)
        <tr>
            <td>{{ $gente->id }}</td>
            <td>{{ $gente->name }}</td>
            <td>{{ $gente->email }}</td>
            <td>{{ $gente->rol }}</td>
            <td>
                <a href="{{ route('sistema.edit', $gente->id) }}" class="btn btn-info btn-sm">Editar</a>
                <form action="{{ route('sistema.destroy', $gente->id) }}" method="POST" class="d-inline-block">
                    @csrf
                    @method('DELETE')
                    <button type="submit" onclick="return confirm('¿Seguro que quieres eliminarlo?')" class="btn btn-danger btn-sm">Borrar</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

                <div class="mt-4">
                    <a href="{{ route('dashboard') }}" class="btn btn-danger" tabindex="6">Regresar</a>
                </div>

@stop

@section('js')
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap5.min.js"></script>

    <script>
        $(document).ready(function () {
            $('#usuarios').DataTable();
        });
    </script>
@stop
