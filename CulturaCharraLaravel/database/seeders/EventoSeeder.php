<?php

namespace Database\Seeders;


use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Evento;
use Post;

class EventoSeeder extends Seeder
{
    public function run(): void
    {
        $evento = new Evento();

        /*$evento->Nombre = 'Nombre 1';
        $evento->Nombre_mariachi = 'Mariachi 1';
        $evento->Núm_telefono = '1234567890';
        $evento->Email = 'Mariachi@email.com 1';
        $evento->Ubicación_evento = 'ubicacion 1';
        $evento->Fecha_hora = '2025-02-01 20:00:00';
        $evento->Encargado_evento	 = 'encargado 1';
        $evento->Duración_evento = '2';
        $evento->Tamaño_equipo_solicitado = 'mediano';
        $evento->Núm_violines = '6';
        $evento->Núm_trompetas = '3';
        $evento->Núm_guitarras = '2';
        $evento->Hay_vihuela = true;
        $evento->Hay_Guitarrón = true;
        $evento->Hay_Arpa = true;
        $evento->Comentarios	 = 'comentario 1';
        
        $evento->save();*/

        Evento::factory(10)
            ->create();
    }
}
