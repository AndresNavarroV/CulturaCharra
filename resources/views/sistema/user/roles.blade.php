@extends('adminlte::page')

@section('title', 'Lista de Roles')

@section('content_header')
    <h1>Gestión de Roles</h1>
@endsection

@section('content')
    <x-adminlte-button label="Nuevo" theme="primary" icon="fas fa-key" class="float-right" data-toggle="modal" data-target="#modalPurple" />
    @if (Session::has('mensaje'))
      <div class="alert alert-success mt-3">
        {{ Session::get('mensaje') }}
      </div>
    @endif

    <table id="roles" class="table table-secondary table-bordered shadow-lg mt-5" style="width:100%">
        <thead class="bg-primary text-dark">
            <tr>
                <th>ID</th>
                <th>Nombre del Rol</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($roles as $rol)
            <tr>
                <td>{{ $rol->id }}</td>
                <td>{{ $rol->name }}</td>
                <td>
                    <a href="{{ route('roles.edit', $rol->id) }}" class="btn btn-info btn-sm">Editar</a>
                    <form action="{{ route('roles.destroy', $rol->id) }}" method="POST" class="d-inline-block">
                        @csrf
                        @method('DELETE')
                        <button type="submit" onclick="return confirm('¿Seguro que quieres eliminar este rol?')" class="btn btn-danger btn-sm">Borrar</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    {{-- Themed --}}
    <x-adminlte-modal id="modalPurple" title="Crear nuevo Rol" theme="purple"
        icon="fas fa-bolt" size='lg' disable-animations>
            <form action="{{route('roles.store')}}" method="post">
                @csrf
                {{-- With label, invalid feedback disabled, and form group class --}}
                <div class="row">
                    <x-adminlte-input name="nombre" label="Nombre" placeholder="Rol a asiganar"
                        fgroup-class="col-md-6" disable-feedback/>
                </div>
                <x-adminlte-button type="submit" label="Guardar" theme="primary" icon="fas fa-key"/>
            </form>
    </x-adminlte-modal>
    {{-- Example button to open modal --}}
    <x-adminlte-button label="Agregar nuevo" data-toggle="modal" data-target="#modalPurple" class="bg-purple"/>
@endsection

@section('js')
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap5.min.js"></script>

<script>
    $(document).ready(function () {
        $('#roles').DataTable();
    });
</script>
@endsection
