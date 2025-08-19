@extends('adminlte::page')

@section('title', 'Lista de Usuarios')

@section('content_header')
    <h1>Administracion de Usuarios</h1>
@endsection

@section('content')
    <x-adminlte-button label="Nuevo" theme="primary" icon="fas fa-key" class="float-right" data-toggle="modal" data-target="#modalPurple" />
    @if (Session::has('mensaje'))
      <div class="alert alert-success mt-3">
        {{ Session::get('mensaje') }}
      </div>
    @endif

    <table id="usuario" class="table table-secondary table-bordered shadow-lg mt-5" style="width:100%">
        <thead class="bg-primary text-dark">
            <tr>
                <th>ID</th>
                <th>Nombre del Usuario</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
            <tr>
                <td>{{ $user->id }}</td>
                <td>{{ $user->name }}</td>
                <td>
                    <a href="{{ route('asignar.edit', $user->id) }}" class="btn btn-info btn-sm">Editar</a>
                    <form action="{{ route('asignar.destroy', $user->id) }}" method="POST" class="d-inline-block">
                        @csrf
                        @method('DELETE')
                        <button type="submit" onclick="return confirm('¿Seguro que quieres eliminar este usuario?')" class="btn btn-danger btn-sm">Borrar</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection

@section('js')
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap5.min.js"></script>

<script>
    $(document).ready(function () {
        $('#usuario').DataTable();
    });
</script>
@endsection
