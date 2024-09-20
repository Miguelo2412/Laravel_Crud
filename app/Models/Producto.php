<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    // Especifica los campos que se pueden asignar masivamente
    protected $fillable = [
        'nombre',
        'descripcion',
        'presentacion',
        'pais_origen',
        'precio',
        'stock',
    ];

    // Si el nombre de la tabla no es plural del nombre del modelo, defínelo aquí
    protected $table = 'productos';
}
