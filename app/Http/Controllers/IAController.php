<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Symfony\Component\Process\Process;
use Symfony\Component\Process\Exception\ProcessFailedException;

class IAController extends Controller
{
    // Mostrar la vista
    public function index()
    {
        return view('IA.ARMonica.index');
    }

    // Ejecutar el script Python
    public function generarPlaylist(Request $request)
    {
        $genero = $request->input('genero');
        $scriptPath = base_path('ARMonica/generar_playlist.py');

        // Ruta completa a python.exe (ajusta si es diferente)
        $pythonPath = 'C:\\Users\\Andres\\AppData\\Local\\Programs\\Python\\Python3135\\python.exe';

        $process = new Process([$pythonPath, $scriptPath, $genero]);
        $process->run();

        if (!$process->isSuccessful()) {
            return redirect()->back()->with('error', 'Error al ejecutar el script Python.');
        }

        $output = trim($process->getOutput());
        return redirect()->back()->with('playlist_url', $output);
    }
}
