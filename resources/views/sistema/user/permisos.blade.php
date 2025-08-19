@extends('adminlte::page')

@section('title', 'Lista de Permisos')

@section('content_header')
    <h1>Gestión de Permisos</h1>
@endsection

@section('content')
    <x-adminlte-button label="Nuevo" theme="primary" icon="fas fa-key" class="float-right" data-toggle="modal" data-target="#modalPurple" />
    @if (Session::has('mensaje'))
      <div class="alert alert-success mt-3">
        {{ Session::get('mensaje') }}
      </div>
    @endif

    <table id="permisos" class="table table-secondary table-bordered shadow-lg mt-5" style="width:100%">
        <thead class="bg-primary text-dark">
            <tr>
                <th>ID</th>
                <th>Nombre del permiso</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($permisos as $permiso)
            <tr>
                <td>{{ $permiso->id }}</td>
                <td>{{ $permiso->name }}</td>
                <td>
                    <a href="{{ route('permisos.edit', $permiso->id) }}" class="btn btn-info btn-sm">Editar</a>
                    <form action="{{ route('permisos.destroy', $permiso->id) }}" method="POST" class="d-inline-block">
                        @csrf
                        @method('DELETE')
                        <button type="submit" onclick="return confirm('¿Seguro que quieres eliminar este permiso?')" class="btn btn-danger btn-sm">Borrar</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    {{-- Themed --}}
    <x-adminlte-modal id="modalPurple" title="Nuevo Permiso" theme="purple"
        icon="fas fa-bolt" size='lg' disable-animations>
            <form action="{{route('permisos.store')}}" method="post">
                @csrf
                {{-- With label, invalid feedback disabled, and form group class --}}
                <div class="row">
                    <x-adminlte-input name="nombre" label="Nombre" placeholder="Permisos a asiganar"
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
        $('#permisos').DataTable();
    });
</script>
@endsection
