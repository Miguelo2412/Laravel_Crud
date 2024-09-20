<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Proveedor extends Model
{
    use HasFactory;

    // Definir el nombre correcto de la tabla
    protected $table = 'proveedores';

    // Definir los campos que se pueden llenar masivamente
    protected $fillable = ['nombre', 'direccion', 'telefono', 'email'];
}
