@extends('layouts.plantilla_base_sonido')

@section('contenido')

<!-- Botón Cancelar arriba a la derecha -->
<div class="d-flex justify-content-end mb-3">
    <a href="/articulos" class="btn btn-outline-danger">Cancelar</a>
</div>

<h2>Crear registros</h2>

<form action="/articulos" method="POST">
    @csrf

    <div class="mb-3">
        <label for="bocinas" class="form-label">Bocinas</label>
        <input type="number" id="bocinas" name="bocinas" class="form-control" required tabindex="1">
    </div>

    <div class="mb-3">
        <label for="bolsas_bases_bocinas" class="form-label">Bolsas Bases Bocinas</label>
        <input type="number" id="bolsas_bases_bocinas" name="bolsas_bases_bocinas" class="form-control" required tabindex="2">
    </div>

    <div class="mb-3">
        <label for="bolsas_bases_microfonos_violines" class="form-label">Bolsas Bases Micrófonos Violines</label>
        <input type="number" id="bolsas_bases_microfonos_violines" name="bolsas_bases_microfonos_violines" class="form-control" required tabindex="3">
    </div>

    <div class="mb-3">
        <label for="bolsas_bases_microfonos_armonia" class="form-label">Bolsas Bases Micrófonos Armonía</label>
        <input type="number" id="bolsas_bases_microfonos_armonia" name="bolsas_bases_microfonos_armonia" class="form-control" required tabindex="4">
    </div>

    <div class="mb-3">
        <label for="bolsas_bases_microfonos_inalambricos" class="form-label">Bolsas Bases Micrófonos Inalámbricos</label>
        <input type="number" id="bolsas_bases_microfonos_inalambricos" name="bolsas_bases_microfonos_inalambricos" class="form-control" required tabindex="5">
    </div>

    <div class="mb-3">
        <label for="consolas_sonido" class="form-label">Consolas de Sonido</label>
        <input type="number" id="consolas_sonido" name="consolas_sonido" class="form-control" required tabindex="6">
    </div>

    <div class="mb-3">
        <label for="cajas_microfonos_inalambricos" class="form-label">Cajas Micrófonos Inalámbricos</label>
        <input type="number" id="cajas_microfonos_inalambricos" name="cajas_microfonos_inalambricos" class="form-control" required tabindex="7">
    </div>

    <div class="mb-3">
        <label for="cajas_microfonos_alambricos" class="form-label">Cajas Micrófonos Alambricos</label>
        <input type="number" id="cajas_microfonos_alambricos" name="cajas_microfonos_alambricos" class="form-control" required tabindex="8">
    </div>

    <div class="mb-3">
        <label for="cajas_cables_electricos" class="form-label">Cajas Cables Eléctricos</label>
        <input type="number" id="cajas_cables_electricos" name="cajas_cables_electricos" class="form-control" required tabindex="9">
    </div>

    <div class="mb-3">
        <label for="cajas_cables_xlr" class="form-label">Cajas Cables XLR</label>
        <input type="number" id="cajas_cables_xlr" name="cajas_cables_xlr" class="form-control" required tabindex="10">
    </div>

    <div class="mb-3">
        <label for="mesas_consola" class="form-label">Mesas Consola</label>
        <input type="number" id="mesas_consola" name="mesas_consola" class="form-control" required tabindex="11">
    </div>

    <div class="mb-3">
        <label for="carritos_cargadores" class="form-label">Carritos Cargadores</label>
        <input type="number" id="carritos_cargadores" name="carritos_cargadores" class="form-control" required tabindex="12">
    </div>

    <div class="mb-3">
        <label for="camionetas" class="form-label">Camionetas</label>
        <input type="number" id="camionetas" name="camionetas" class="form-control" required tabindex="13">
    </div>

    <div class="mb-3">
        <label for="ingenieros" class="form-label">Ingenieros</label>
        <input type="number" id="ingenieros" name="ingenieros" class="form-control" required tabindex="14">
    </div>

    <div class="mb-3">
        <label for="tecnicos" class="form-label">Técnicos</label>
        <input type="number" id="tecnicos" name="tecnicos" class="form-control" required tabindex="15">
    </div>

    <!-- Botones al final -->
    <div class="d-flex gap-2 mt-4">
        <a href="/articulos" class="btn btn-danger" tabindex="16">Cancelar</a>
        <button type="submit" class="btn btn-success" tabindex="17">Guardar</button>
    </div>
</form>

@endsection
