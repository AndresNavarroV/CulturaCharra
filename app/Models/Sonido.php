<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sonido extends Model
{
    use HasFactory;

    protected $table = 'sonido';

    protected $fillable = [
        'bocinas',
        'bolsas_bases_bocinas',
        'bolsas_bases_microfonos_violines',
        'bolsas_bases_microfonos_armonia',
        'bolsas_bases_microfonos_inalambricos',
        'consolas_sonido',
        'cajas_microfonos_inalambricos',
        'cajas_microfonos_alambricos',
        'cajas_cables_electricos',
        'cajas_cables_xlr',
        'mesas_consola',
        'carritos_cargadores',
        'camionetas',
        'ingenieros',
        'tecnicos',
    ];
}