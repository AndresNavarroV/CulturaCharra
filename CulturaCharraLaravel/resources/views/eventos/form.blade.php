<h1> {{$modo}} Evento</h1>

@if(count($errors)>0)
    <div class="alert alert-danger" role="alert">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
    </div>

@endif

<label>Nombre: <input type="text" name="Nombre" 
    value="{{ isset($evento->Nombre) ? $evento->Nombre : old('Nombre') }}" required></label><br>

<label>Nombre del Mariachi: <input type="text" name="Nombre_mariachi" 
    value="{{ isset($evento->Nombre_mariachi) ? $evento->Nombre_mariachi : old('Nombre_mariachi') }}" required></label><br>

<label>Número de Teléfono: <input type="tel" name="Núm_telefono" pattern="\d{10}" 
    value="{{ isset($evento->Núm_telefono) ? $evento->Núm_telefono : old('Núm_telefono') }}" required></label><br>

<label>Email: <input type="email" name="Email" 
    value="{{ isset($evento->Email) ? $evento->Email : old('Email') }}" required></label><br>

<label>Ubicación del Evento: <input type="text" name="Ubicación_evento" 
    value="{{ isset($evento->Ubicación_evento) ? $evento->Ubicación_evento : old('Ubicación_evento') }}" required></label><br>

<label>Fecha y Hora: <input type="datetime-local" name="Fecha_hora" 
    value="{{ isset($evento->Fecha_hora) ? $evento->Fecha_hora : old('Fecha_hora') }}" required></label><br>

<label>Encargado del Evento: <input type="text" name="Encargado_evento" 
    value="{{ isset($evento->Encargado_evento) ? $evento->Encargado_evento : old('Encargado_evento') }}"></label><br>

<label>Duración del Evento (horas): <input type="number" name="Duración_evento" min="1" max="12" 
    value="{{ isset($evento->Duración_evento) ? $evento->Duración_evento : old('Duración_evento') }}" required></label><br>

<label>Tamaño del Equipo Solicitado:
    <select name="Tamaño_equipo_solicitado" required>
        <option value="chico" {{ (isset($evento->Tamaño_equipo_solicitado) && $evento->Tamaño_equipo_solicitado == 'chico') || old('Tamaño_equipo_solicitado') == 'chico' ? 'selected' : '' }}>Chico</option>
        <option value="mediano" {{ (isset($evento->Tamaño_equipo_solicitado) && $evento->Tamaño_equipo_solicitado == 'mediano') || old('Tamaño_equipo_solicitado') == 'mediano' ? 'selected' : '' }}>Mediano</option>
        <option value="grande" {{ (isset($evento->Tamaño_equipo_solicitado) && $evento->Tamaño_equipo_solicitado == 'grande') || old('Tamaño_equipo_solicitado') == 'grande' ? 'selected' : '' }}>Grande</option>
    </select>
</label><br>

<label>Número de Violines: <input type="number" name="Núm_violines" min="0" 
    value="{{ isset($evento->Núm_violines) ? $evento->Núm_violines : old('Núm_violines') }}" required></label><br>

<label>Número de Trompetas: <input type="number" name="Núm_trompetas" min="0" 
    value="{{ isset($evento->Núm_trompetas) ? $evento->Núm_trompetas : old('Núm_trompetas') }}" required></label><br>

<label>Número de Guitarras: <input type="number" name="Núm_guitarras" min="0" 
    value="{{ isset($evento->Núm_guitarras) ? $evento->Núm_guitarras : old('Núm_guitarras') }}" required></label><br>

<label>¿Hay Vihuela?
    <input type="hidden" name="Hay_vihuela" value="0">
    <input type="checkbox" name="Hay_vihuela" value="1" 
        {{ (isset($evento->Hay_vihuela) && $evento->Hay_vihuela) || old('Hay_vihuela') ? 'checked' : '' }}>
</label><br>

<label>¿Hay Guitarrón?
    <input type="hidden" name="Hay_Guitarrón" value="0">
    <input type="checkbox" name="Hay_Guitarrón" value="1" 
        {{ (isset($evento->Hay_Guitarrón) && $evento->Hay_Guitarrón) || old('Hay_Guitarrón') ? 'checked' : '' }}>
</label><br>

<label>¿Hay Arpa?
    <input type="hidden" name="Hay_Arpa" value="0">
    <input type="checkbox" name="Hay_Arpa" value="1" 
        {{ (isset($evento->Hay_Arpa) && $evento->Hay_Arpa) || old('Hay_Arpa') ? 'checked' : '' }}>
</label><br>

<label>Comentarios:<br>
    <textarea name="Comentarios" rows="4">{{ isset($evento->Comentarios) ? $evento->Comentarios : old('Comentarios') }}</textarea>
</label><br>


<input type="submit" value="{{$modo}} datos">

<a href="{{url('eventos/')}}">Resgresar</a>
<br>
<br>
