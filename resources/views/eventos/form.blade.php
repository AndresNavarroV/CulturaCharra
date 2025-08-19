<h1 class="mb-4">{{ $modo }} Evento</h1>

@if(count($errors) > 0)
  <div class="alert alert-danger">
    <ul class="mb-0">
      @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
      @endforeach
    </ul>
  </div>
@endif

<div class="row g-3">
  <div class="col-md-6">
    <label for="Nombre" class="form-label">Nombre</label>
    <input type="text" class="form-control" name="Nombre" id="Nombre" value="{{ old('Nombre', $evento->Nombre ?? '') }}" required>
  </div>

  <div class="col-md-6">
    <label for="Nombre_mariachi" class="form-label">Nombre del Mariachi</label>
    <input type="text" class="form-control" name="Nombre_mariachi" id="Nombre_mariachi" value="{{ old('Nombre_mariachi', $evento->Nombre_mariachi ?? '') }}" required>
  </div>

  <div class="col-md-6">
    <label for="Núm_telefono" class="form-label">Número de Teléfono</label>
    <input type="tel" class="form-control" name="Núm_telefono" id="Núm_telefono" pattern="\d{10}" value="{{ old('Núm_telefono', $evento->Núm_telefono ?? '') }}" required>
  </div>

  <div class="col-md-6">
    <label for="Email" class="form-label">Email</label>
    <input type="email" class="form-control" name="Email" id="Email" value="{{ old('Email', $evento->Email ?? '') }}" required>
  </div>

  <div class="col-md-12">
    <label for="Ubicación_evento" class="form-label">Ubicación del Evento</label>
    <input type="text" class="form-control" name="Ubicación_evento" id="Ubicación_evento" value="{{ old('Ubicación_evento', $evento->Ubicación_evento ?? '') }}" required>
  </div>

  <div class="col-md-6">
    <label for="Fecha_hora" class="form-label">Fecha y Hora</label>
    <input type="datetime-local" class="form-control" name="Fecha_hora" id="Fecha_hora" value="{{ old('Fecha_hora', $evento->Fecha_hora ?? '') }}" required>
  </div>

  <div class="col-md-6">
    <label for="Encargado_evento" class="form-label">Encargado del Evento</label>
    <input type="text" class="form-control" name="Encargado_evento" id="Encargado_evento" value="{{ old('Encargado_evento', $evento->Encargado_evento ?? '') }}">
  </div>

  <div class="col-md-6">
    <label for="Duración_evento" class="form-label">Duración del Evento (horas)</label>
    <input type="number" class="form-control" name="Duración_evento" id="Duración_evento" min="1" max="12" value="{{ old('Duración_evento', $evento->Duración_evento ?? '') }}" required>
  </div>

  <div class="col-md-6">
    <label for="Tamaño_equipo_solicitado" class="form-label">Tamaño del Equipo Solicitado</label>
    <select class="form-select" name="Tamaño_equipo_solicitado" id="Tamaño_equipo_solicitado" required>
      <option value="chico" {{ old('Tamaño_equipo_solicitado', $evento->Tamaño_equipo_solicitado ?? '') == 'chico' ? 'selected' : '' }}>Chico</option>
      <option value="mediano" {{ old('Tamaño_equipo_solicitado', $evento->Tamaño_equipo_solicitado ?? '') == 'mediano' ? 'selected' : '' }}>Mediano</option>
      <option value="grande" {{ old('Tamaño_equipo_solicitado', $evento->Tamaño_equipo_solicitado ?? '') == 'grande' ? 'selected' : '' }}>Grande</option>
    </select>
  </div>

  <div class="col-md-4">
    <label for="Núm_violines" class="form-label">Número de Violines</label>
    <input type="number" class="form-control" name="Núm_violines" id="Núm_violines" min="0" value="{{ old('Núm_violines', $evento->Núm_violines ?? '') }}" required>
  </div>

  <div class="col-md-4">
    <label for="Núm_trompetas" class="form-label">Número de Trompetas</label>
    <input type="number" class="form-control" name="Núm_trompetas" id="Núm_trompetas" min="0" value="{{ old('Núm_trompetas', $evento->Núm_trompetas ?? '') }}" required>
  </div>

  <div class="col-md-4">
    <label for="Núm_guitarras" class="form-label">Número de Guitarras</label>
    <input type="number" class="form-control" name="Núm_guitarras" id="Núm_guitarras" min="0" value="{{ old('Núm_guitarras', $evento->Núm_guitarras ?? '') }}" required>
  </div>

  <div class="col-md-4">
    <div class="form-check mt-4">
      <input type="hidden" name="Hay_vihuela" value="0">
      <input class="form-check-input" type="checkbox" name="Hay_vihuela" id="Hay_vihuela" value="1" {{ old('Hay_vihuela', $evento->Hay_vihuela ?? false) ? 'checked' : '' }}>
      <label class="form-check-label" for="Hay_vihuela">¿Hay Vihuela?</label>
    </div>
  </div>

  <div class="col-md-4">
    <div class="form-check mt-4">
      <input type="hidden" name="Hay_Guitarrón" value="0">
      <input class="form-check-input" type="checkbox" name="Hay_Guitarrón" id="Hay_Guitarrón" value="1" {{ old('Hay_Guitarrón', $evento->Hay_Guitarrón ?? false) ? 'checked' : '' }}>
      <label class="form-check-label" for="Hay_Guitarrón">¿Hay Guitarrón?</label>
    </div>
  </div>

  <div class="col-md-4">
    <div class="form-check mt-4">
      <input type="hidden" name="Hay_Arpa" value="0">
      <input class="form-check-input" type="checkbox" name="Hay_Arpa" id="Hay_Arpa" value="1" {{ old('Hay_Arpa', $evento->Hay_Arpa ?? false) ? 'checked' : '' }}>
      <label class="form-check-label" for="Hay_Arpa">¿Hay Arpa?</label>
    </div>
  </div>

  <div class="col-md-12">
    <label for="Comentarios" class="form-label">Comentarios</label>
    <textarea class="form-control" name="Comentarios" id="Comentarios" rows="4">{{ old('Comentarios', $evento->Comentarios ?? '') }}</textarea>
  </div>
</div>

<div class="col-md-3">
  <label for="status" class="form-label">Estado del Evento</label>
  <select class="form-select" name="status" id="status" required>
    <option value="en_espera" {{ old('status', $evento->status ?? '') == 'en_espera' ? 'selected' : '' }}>En espera</option>
    <option value="aprobado" {{ old('status', $evento->status ?? '') == 'aprobado' ? 'selected' : '' }}>Aprobado</option>
    <option value="rechazado" {{ old('status', $evento->status ?? '') == 'rechazado' ? 'selected' : '' }}>Rechazado</option>
  </select>
</div>


<!-- Botones -->
<div class="mt-4 d-flex justify-content-between align-items-center flex-wrap gap-2">
  <div class="d-flex gap-2">
    <a href="{{ url('eventos/') }}" class="btn btn-outline-secondary">Regresar a Eventos</a>
    <a href="{{ url('sonido/') }}" class="btn btn-outline-secondary">Regresar a Sonido</a>
  </div>

  <div class="d-flex gap-2">
    <button type="submit" class="btn btn-primary">{{ $modo }} Evento</button>

    <button type="submit" name="guardar_sonido" value="1" class="btn btn-success">
      Guardar para Sonido
    </button>
  </div>
</div>
