<?php

namespace App\Models;

USE Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Evento extends Model
{
    use HasFactory;

    // Nombre de la tabla en la base de datos
    protected $table = 'eventos_nuevos';

    // Campos que se pueden llenar masivamente
    protected $fillable = [
        'Nombre',
        'Nombre_mariachi',
        'Núm_telefono',
        'Email',
        'Ubicación_evento	',
        'Fecha_hora',
        'Encargado_evento',
        'Duración_evento',
        'Tamaño_equipo_solicitado',
        'Núm_violines',
        'Núm_trompetas',
        'Núm_guitarras',
        'Hay_vihuela',
        'Hay_Guitarrón',
        'Hay_Arpa',
        'Comentarios'
    ];

    // Para manejar fechas correctamente
    protected $casts = [
        'Fecha_hora' => 'datetime', // Laravel manejará este campo como una fecha
        'Duración_evento' => 'float', // Se maneja como número decimal
        'Núm_violines' => 'integer',
        'Núm_trompetas' => 'integer',
        'Núm_guitarras' => 'integer',
        'Hay_vihuela' => 'boolean',
        'Hay_Guitarrón' => 'boolean',
        'Hay_Arpa' => 'boolean'
    ];
}
