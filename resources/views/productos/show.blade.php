@extends('layouts.app')

@section('content')
<h2>Mostrar Producto</h2>

<div class="mb-3">
    <strong>Nombre:</strong> {{ $producto->nombre }}
</div>
<div class="mb-3">
    <strong>Descripción:</strong> {{ $producto->descripcion }}
</div>
<div class="mb-3">
    <strong>Presentación:</strong> {{ $producto->presentacion }}
</div>
<div class="mb-3">
    <strong>País de Origen:</strong> {{ $producto->pais_origen }}
</div>
<div class="mb-3">
    <strong>Precio:</strong> {{ $producto->precio }}
</div>
<div class="mb-3">
    <strong>Stock:</strong> {{ $producto->stock }}
</div>

<a class="btn btn-primary" href="{{ route('productos.edit', $producto->id) }}">Editar</a>
<form action="{{ route('productos.destroy', $producto->id) }}" method="POST" style="display:inline;">
    @csrf
    @method('DELETE')
    <button type="submit" class="btn btn-danger">Eliminar</button>
</form>
@endsection
