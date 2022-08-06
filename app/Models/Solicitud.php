<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\Casts\Attribute;

class Solicitud extends Model
{
    use HasFactory;

    protected $fillable = [

        'nombre_completo',
        'tipo_documento',
        'numero_documento',
        'departamento',
        'municipio',
        'servicio',
        'descripcon',
        'fecha_inicial',
        'observaciones',
        'subir_pdf',
        'estado',
    ];

    protected function name(): Attribute
    {
        return new Attribute(
            get: fn($value) => ucwords($value),
            set: fn($value) => strtolower($value)

        );
    }
}
