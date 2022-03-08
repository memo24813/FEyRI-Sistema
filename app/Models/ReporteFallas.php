<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ReporteFallas extends Model
{
    use HasFactory;

    public $timestamps = true;

    protected $fillable = [
        'equipo',
        'marca',
        'modelo',
        'serie',
        'inventario',
        'problema',
        'solucion',
        'propietario'
    ];

    protected $table = 'reporte_fallas';
}
