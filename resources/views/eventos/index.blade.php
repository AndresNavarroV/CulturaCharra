@extends('layouts.plantilla_base_eventos')

@section('contenido')

<div class="d-flex justify-content-end mb-3">
  <a href="eventos/create" class="btn btn-secondary">Crear</a>
</div>

<h2 class="mb-3">Listado de Eventos</h2>

@if (Session::has('mensaje'))
  <div class="alert alert-success">
    {{ Session::get('mensaje') }}
  </div>
@endif

<!-- Tabla responsiva -->
<div class="table-responsive">
  <table class="table table-bordered table-striped table-hover align-middle">
    <thead class="table-danger text-center">
      <tr>
        <th>ID</th>
        <th>Nombre</th>
        <th>Nombre del Mariachi</th>
        <th>Número de Teléfono</th>
        <th>Email</th>
        <th>Ubicación del Evento</th>
        <th>Fecha y Hora</th>
        <th>Encargado del Evento</th>
        <th>Duración</th>
        <th>Tamaño del Equipo</th>
        <th>Violines</th>
        <th>Trompetas</th>
        <th>Guitarras</th>
        <th>Vihuela</th>
        <th>Guitarrón</th>
        <th>Arpa</th>
        <th>Comentarios</th>
        <th>Status</th>
        <th>Acciones</th>
      </tr>
    </thead>

    <tbody>
      @foreach($eventos as $evento)
      <tr>
        <td>{{ $evento->id }}</td>
        <td>{{ $evento->Nombre }}</td>
        <td>{{ $evento->Nombre_mariachi }}</td>
        <td>{{ $evento->Núm_telefono }}</td>
        <td>{{ $evento->Email }}</td>
        <td>{{ $evento->Ubicación_evento }}</td>
        <td>{{ $evento->Fecha_hora }}</td>
        <td>{{ $evento->Encargado_evento ?? 'N/A' }}</td>
        <td>{{ $evento->Duración_evento }} hrs</td>
        <td>{{ ucfirst($evento->Tamaño_equipo_solicitado) }}</td>
        <td>{{ $evento->Núm_violines }}</td>
        <td>{{ $evento->Núm_trompetas }}</td>
        <td>{{ $evento->Núm_guitarras }}</td>
        <td>{{ $evento->Hay_vihuela ? 'Sí' : 'No' }}</td>
        <td>{{ $evento->Hay_Guitarrón ? 'Sí' : 'No' }}</td>
        <td>{{ $evento->Hay_Arpa ? 'Sí' : 'No' }}</td>
        <td>{{ $evento->Comentarios ?? 'Sin comentarios' }}</td>
        <td>
        @if($evento->status === 'aprobado')
          <span style="color: green;">Aprobado</span>
        @elseif($evento->status === 'rechazado')
          <span style="color: red;">Rechazado</span>
        @else
          <span style="color: orange;">En espera</span>
        @endif
      </td>
        <td>
          <div class="d-flex flex-column flex-md-row gap-2">
            <a href="{{ url('/eventos/'.$evento->id.'/edit') }}" class="btn btn-sm btn-info">Editar</a>
            <form action="{{ url('/eventos/'.$evento->id) }}" method="POST" class="d-inline-block">
              @csrf
              {{ method_field('DELETE') }}
              <button type="submit" onclick="return confirm('¿Seguro que quieres eliminarlo?')" class="btn btn-sm btn-danger">Borrar</button>
            </form>
          </div>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>

<!-- Paginación -->
<div class="mt-3">
  {!! $eventos->links() !!}
</div>

@endsection

@section('js')
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap5.min.js"></script>

<script>
  $(document).ready(function() {
    $('#articulos').DataTable();
  });
</script>
@endsection
