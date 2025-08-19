@extends('layouts.plantilla_base_sonido')

@section('contenido')

<h2>Crear registros</h2>

<form action="/articulos/{{$articulo->id}}" method="POST">
    @csrf
    @method('PUT')

    <div class="mb-3">
        <label for="bocinas" class="form-label">Bocinas</label>
        <input type="number" id="bocinas" name="bocinas" class="form-control" required tabindex="1" value="{{$articulo->bocinas}}">
    </div>

    <div class="mb-3">
        <label for="bolsas_bases_bocinas" class="form-label">Bolsas Bases Bocinas</label>
        <input type="number" id="bolsas_bases_bocinas" name="bolsas_bases_bocinas" class="form-control" required tabindex="2" value="{{$articulo->bolsas_bases_bocinas}}">
    </div>

    <div class="mb-3">
        <label for="bolsas_bases_microfonos_violines" class="form-label">Bolsas Bases Micrófonos Violines</label>
        <input type="number" id="bolsas_bases_microfonos_violines" name="bolsas_bases_microfonos_violines" class="form-control" required tabindex="3" value="{{$articulo->bolsas_bases_microfonos_violines}}">
    </div>

    <div class="mb-3">
        <label for="bolsas_bases_microfonos_armonia" class="form-label">Bolsas Bases Micrófonos Armonía</label>
        <input type="number" id="bolsas_bases_microfonos_armonia" name="bolsas_bases_microfonos_armonia" class="form-control" required tabindex="4" value="{{$articulo->bolsas_bases_microfonos_armonia}}">
    </div>

    <div class="mb-3">
        <label for="bolsas_bases_microfonos_inalambricos" class="form-label">Bolsas Bases Micrófonos Inalámbricos</label>
        <input type="number" id="bolsas_bases_microfonos_inalambricos" name="bolsas_bases_microfonos_inalambricos" class="form-control" required tabindex="5" value="{{$articulo->bolsas_bases_microfonos_inalambricos}}">
    </div>

    <div class="mb-3">
        <label for="consolas_sonido" class="form-label">Consolas de Sonido</label>
        <input type="number" id="consolas_sonido" name="consolas_sonido" class="form-control" required tabindex="6" value="{{$articulo->consolas_sonido}}">
    </div>

    <div class="mb-3">
        <label for="cajas_microfonos_inalambricos" class="form-label">Cajas Micrófonos Inalámbricos</label>
        <input type="number" id="cajas_microfonos_inalambricos" name="cajas_microfonos_inalambricos" class="form-control" required tabindex="7" value="{{$articulo->cajas_microfonos_inalambricos}}">
    </div>

    <div class="mb-3">
        <label for="cajas_microfonos_alambricos" class="form-label">Cajas Micrófonos Alambricos</label>
        <input type="number" id="cajas_microfonos_alambricos" name="cajas_microfonos_alambricos" class="form-control" required tabindex="8" value="{{$articulo->cajas_microfonos_alambricos}}">
    </div>

    <div class="mb-3">
        <label for="cajas_cables_electricos" class="form-label">Cajas Cables Eléctricos</label>
        <input type="number" id="cajas_cables_electricos" name="cajas_cables_electricos" class="form-control" required tabindex="9" value="{{$articulo->cajas_cables_electricos}}">
    </div>

    <div class="mb-3">
        <label for="cajas_cables_xlr" class="form-label">Cajas Cables XLR</label>
        <input type="number" id="cajas_cables_xlr" name="cajas_cables_xlr" class="form-control" required tabindex="10" value="{{$articulo->cajas_cables_xlr}}">
    </div>

    <div class="mb-3">
        <label for="mesas_consola" class="form-label">Mesas Consola</label>
        <input type="number" id="mesas_consola" name="mesas_consola" class="form-control" required tabindex="11" value="{{$articulo->mesas_consola}}">
    </div>

    <div class="mb-3">
        <label for="carritos_cargadores" class="form-label">Carritos Cargadores</label>
        <input type="number" id="carritos_cargadores" name="carritos_cargadores" class="form-control" required tabindex="12" value="{{$articulo->carritos_cargadores}}">
    </div>

    <div class="mb-3">
        <label for="camionetas" class="form-label">Camionetas</label>
        <input type="number" id="camionetas" name="camionetas" class="form-control" required tabindex="13" value="{{$articulo->camionetas}}">
    </div>

    <div class="mb-3">
        <label for="ingenieros" class="form-label">Ingenieros</label>
        <input type="number" id="ingenieros" name="ingenieros" class="form-control" required tabindex="14" value="{{$articulo->ingenieros}}">
    </div>

    <div class="mb-3">
        <label for="tecnicos" class="form-label">Técnicos</label>
        <input type="number" id="tecnicos" name="tecnicos" class="form-control" required tabindex="15" value="{{$articulo->tecnicos}}">
    </div>

    <a href="/articulos" class="btn btn-danger" tabindex="16">Cancelar</a>
    <button type="submit" class="btn btn-success" tabindex="17">Guardar</button>
</form>

@endsection
