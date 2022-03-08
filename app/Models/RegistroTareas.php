<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RegistroTareas extends Model
{
    use HasFactory;

    public $timestamps = true;

    protected $fillable = [
        'tarea', 'descripcion', 'estado', 'user_id'
    ];

    protected $table = 'registro_tareas';
}
