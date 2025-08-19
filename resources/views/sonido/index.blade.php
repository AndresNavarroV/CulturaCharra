@extends('layouts.plantilla_base_sonido')

@section('contenido')
<div class="container-fluid py-3">

  {{-- Botón de crear --}}
  <div class="d-flex justify-content-end mb-3">
    <a href="{{ url('articulos/create') }}" class="btn btn-secondary shadow-sm">Crear</a>
  </div>

  {{-- Mensaje de éxito --}}
  @if (Session::has('mensaje'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
      {{ Session::get('mensaje') }}
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
  @endif

  {{-- Tabla de Inventario de Sonido --}}
  <h4 class="fw-bold mt-4 mb-3 text-primary">Inventario de Sonido</h4>
  <div class="table-responsive mb-5 shadow-sm rounded bg-light p-3">
    <table id="articulos" class="table table-bordered table-hover align-middle">
      <thead class="table-primary text-center">
        <tr>
          <th>Bocinas</th>
          <th>Bolsas Bases Bocinas</th>
          <th>Bases Micrófonos Violines</th>
          <th>Bases Micrófonos Armonía</th>
          <th>Bases Micrófonos Inalámbricos</th>
          <th>Consolas de Sonido</th>
          <th>Cajas Inalámbricos</th>
          <th>Cajas Alambricos</th>
          <th>Cables Eléctricos</th>
          <th>Cables XLR</th>
          <th>Mesas Consola</th>
          <th>Carritos Cargadores</th>
          <th>Camionetas</th>
          <th>Ingenieros</th>
          <th>Técnicos</th>
          <th>Acciones</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($articulos as $articulo)
        <tr>
          <td>{{ $articulo->bocinas }}</td>
          <td>{{ $articulo->bolsas_bases_bocinas }}</td>
          <td>{{ $articulo->bolsas_bases_microfonos_violines }}</td>
          <td>{{ $articulo->bolsas_bases_microfonos_armonia }}</td>
          <td>{{ $articulo->bolsas_bases_microfonos_inalambricos }}</td>
          <td>{{ $articulo->consolas_sonido }}</td>
          <td>{{ $articulo->cajas_microfonos_inalambricos }}</td>
          <td>{{ $articulo->cajas_microfonos_alambricos }}</td>
          <td>{{ $articulo->cajas_cables_electricos }}</td>
          <td>{{ $articulo->cajas_cables_xlr }}</td>
          <td>{{ $articulo->mesas_consola }}</td>
          <td>{{ $articulo->carritos_cargadores }}</td>
          <td>{{ $articulo->camionetas }}</td>
          <td>{{ $articulo->ingenieros }}</td>
          <td>{{ $articulo->tecnicos }}</td>
          <td>
            <div class="d-flex flex-column flex-md-row gap-1">
              <a href="/articulos/{{ $articulo->id }}/edit" class="btn btn-info btn-sm">Editar</a>
              <form action="{{ route('articulos.destroy', $articulo->id) }}" method="POST" class="d-inline-block">
                @csrf
                {{ method_field('DELETE') }}
                <button type="submit" onclick="return confirm('¿Seguro que quieres eliminarlo?')" class="btn btn-danger btn-sm">Borrar</button>
              </form>
            </div>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>

  {{-- Tabla de eventos de mariachis --}}
  <h4 class="fw-bold mb-3 text-danger">Eventos Solicitados por Mariachis</h4>
  <div class="table-responsive shadow-sm rounded bg-white p-3">
    <table class="table table-bordered table-striped table-hover align-middle">
      <thead class="table-danger text-center">
        <tr>
          <th>ID</th>
          <th>Nombre</th>
          <th>Mariachi</th>
          <th>Teléfono</th>
          <th>Email</th>
          <th>Ubicación</th>
          <th>Fecha/Hora</th>
          <th>Encargado</th>
          <th>Duración</th>
          <th>Tamaño</th>
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
          <td class="fw-bold text-center">
            @if($evento->status === 'aprobado')
              <span class="text-success">Aprobado</span>
            @elseif($evento->status === 'rechazado')
              <span class="text-danger">Rechazado</span>
            @else
              <span class="text-warning">En espera</span>
            @endif
          </td>
          <td>
            <div class="d-flex flex-column flex-md-row gap-2">
              <a href="{{ url('/eventos/'.$evento->id.'/edit') }}" class="btn btn-sm btn-info">Editar</a>
            </div>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
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
