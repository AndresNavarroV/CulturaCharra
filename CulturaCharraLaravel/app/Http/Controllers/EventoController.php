<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Evento;
use Illuminate\Http\Request;
use PhpParser\Node\Stmt\Return_;

class EventoController extends Controller
{
    public function index()
    {
        $datos['eventos']=Evento::paginate(10); //accede a la base de datos y la muestra

        return view('eventos.index',$datos); //retorna la vista a la pagina index.blade.php
    }

    public function create()
    {
        return view('eventos.create');
    }

    public function store(Request $request)
    {
    //validaciones del formulario
    $campos = [
        'Nombre' => 'required|string|max:100',
        'Nombre_mariachi' => 'required|string|max:100',
        'Núm_telefono' => 'required|digits:10',
        'Email' => 'required|email',
        'Ubicación_evento' => 'required|string|max:255',
        'Fecha_hora' => 'required|date',
        'Encargado_evento' => 'nullable|string|max:100',
        'Duración_evento' => 'required|integer|min:1|max:12',
        'Tamaño_equipo_solicitado' => 'required|in:chico,mediano,grande',
        'Núm_violines' => 'required|integer|min:0|max:10',
        'Núm_trompetas' => 'required|integer|min:0|max:10',
        'Núm_guitarras' => 'required|integer|min:0|max:10',
        'Hay_vihuela' => 'required|boolean',
        'Hay_Guitarrón' => 'required|boolean',
        'Hay_Arpa' => 'required|boolean',
        'Comentarios' => 'nullable|string|max:1000',
    ];

    $mensaje=[
        'required' => 'El :attribute es requerido',
        'Ubicación_evento.required' => 'La ubicación es requerida',
        'Fecha_hora.required' => 'La fecha es requerida',
        'Duración_evento.required' => 'La duracion del evento es requerido'
    ];

    $this -> validate($request, $campos, $mensaje);

    $datosEvento = request()->except('_token', 'Enviar');

    $datosEvento['Hay_vihuela'] = $request->has('Hay_vihuela') ? 1 : 0;
    $datosEvento['Hay_Guitarrón'] = $request->has('Hay_Guitarrón') ? 1 : 0;
    $datosEvento['Hay_Arpa'] = $request->has('Hay_Arpa') ? 1 : 0;

    Evento::insert($datosEvento);
    
    //return response()->json($datosEvento); esto mandaba los datos en un json

    return redirect('eventos')->with('mensaje','Evento agregado con éxito');
    }

    public function edit($id)
    {   
        $evento=Evento::findOrFail($id);
        return view('eventos.edit', compact('evento'));
    }

    public function showdata($evento)
    {
        return view('eventos.showdata', compact('evento')); //compact esta para cambiar de la vista a una variable el post
    }

    public function update(Request $request, $id)
    {

        $campos = [
            'Nombre' => 'required|string|max:100',
            'Nombre_mariachi' => 'required|string|max:100',
            'Núm_telefono' => 'required|digits:10',
            'Email' => 'required|email',
            'Ubicación_evento' => 'required|string|max:255',
            'Fecha_hora' => 'required|date',
            'Encargado_evento' => 'nullable|string|max:100',
            'Duración_evento' => 'required|integer|min:1|max:12',
            'Tamaño_equipo_solicitado' => 'required|in:chico,mediano,grande',
            'Núm_violines' => 'required|integer|min:0|max:10',
            'Núm_trompetas' => 'required|integer|min:0|max:10',
            'Núm_guitarras' => 'required|integer|min:0|max:10',
            'Hay_vihuela' => 'required|boolean',
            'Hay_Guitarrón' => 'required|boolean',
            'Hay_Arpa' => 'required|boolean',
            'Comentarios' => 'nullable|string|max:1000',
        ];
    
        $mensaje=[
            'required' => 'El :attribute es requerido',
            'Ubicación_evento.required' => 'La ubicación es requerida',
            'Fecha_hora.required' => 'La fecha es requerida',
            'Duración_evento.required' => 'La duracion del evento es requerido'
        ];
    
        $this -> validate($request, $campos, $mensaje);

        $datosEvento = request()->except('_token', 'Enviar', '_method');

        Evento::where('id','=',$id)->update($datosEvento);
        $evento=Evento::findOrFail($id);
        //return view('eventos.edit', compact('evento'));
        return redirect('eventos')->with('mensaje','Evento Modificado correctamente');
    }

    public function destroy($id)
    {
        Evento::destroy($id);
        return redirect('eventos')->with('mensaje','Evento eliminado con éxito');
    }
}
