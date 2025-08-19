<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Sonido;
use App\Models\Evento;

class SonidoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $articulos=Sonido::all();
        $eventos = Evento::paginate(10);

        return view('sonido.index', compact('articulos', 'eventos'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('sonido.crear');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $articulos = new Sonido();
    
        $articulos->bocinas = $request->get('bocinas');
        $articulos->bolsas_bases_bocinas = $request->get('bolsas_bases_bocinas');
        $articulos->bolsas_bases_microfonos_violines = $request->get('bolsas_bases_microfonos_violines');
        $articulos->bolsas_bases_microfonos_armonia = $request->get('bolsas_bases_microfonos_armonia');
        $articulos->bolsas_bases_microfonos_inalambricos = $request->get('bolsas_bases_microfonos_inalambricos');
        $articulos->consolas_sonido = $request->get('consolas_sonido');
        $articulos->cajas_microfonos_inalambricos = $request->get('cajas_microfonos_inalambricos');
        $articulos->cajas_microfonos_alambricos = $request->get('cajas_microfonos_alambricos');
        $articulos->cajas_cables_electricos = $request->get('cajas_cables_electricos');
        $articulos->cajas_cables_xlr = $request->get('cajas_cables_xlr');
        $articulos->mesas_consola = $request->get('mesas_consola');
        $articulos->carritos_cargadores = $request->get('carritos_cargadores');
        $articulos->camionetas = $request->get('camionetas');
        $articulos->ingenieros = $request->get('ingenieros');
        $articulos->tecnicos = $request->get('tecnicos');
    
        $articulos->save();
    
        return redirect('/articulos')->with('mensaje','Evento agregado con éxito');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $articulo = Sonido::find($id);
        return view('sonido.editar')->with('articulo',$articulo);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
{
    $articulo = Sonido::find($id);

    $articulo->bocinas = $request->get('bocinas');
    $articulo->bolsas_bases_bocinas = $request->get('bolsas_bases_bocinas');
    $articulo->bolsas_bases_microfonos_violines = $request->get('bolsas_bases_microfonos_violines');
    $articulo->bolsas_bases_microfonos_armonia = $request->get('bolsas_bases_microfonos_armonia');
    $articulo->bolsas_bases_microfonos_inalambricos = $request->get('bolsas_bases_microfonos_inalambricos');
    $articulo->consolas_sonido = $request->get('consolas_sonido');
    $articulo->cajas_microfonos_inalambricos = $request->get('cajas_microfonos_inalambricos');
    $articulo->cajas_microfonos_alambricos = $request->get('cajas_microfonos_alambricos');
    $articulo->cajas_cables_electricos = $request->get('cajas_cables_electricos');
    $articulo->cajas_cables_xlr = $request->get('cajas_cables_xlr');
    $articulo->mesas_consola = $request->get('mesas_consola');
    $articulo->carritos_cargadores = $request->get('carritos_cargadores');
    $articulo->camionetas = $request->get('camionetas');
    $articulo->ingenieros = $request->get('ingenieros');
    $articulo->tecnicos = $request->get('tecnicos');

    $articulo->save();

    return redirect('/articulos')->with('mensaje', 'Evento actualizado correctamente');

}

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $articulo = Sonido::find($id);
        $articulo->delete();
        return redirect('/articulos')->with('mensaje','Evento eliminado con éxito');
    }
}
