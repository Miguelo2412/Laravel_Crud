@extends('layouts.app')

@section('content')
<div class="d-flex justify-content-between">
    <h2>Productos</h2>
    <a class="btn btn-success" href="{{ route('productos.create') }}">Crear Producto</a>
</div>

@if ($message = Session::get('success'))
    <div class="alert alert-success mt-3">
        <p>{{ $message }}</p>
    </div>
@endif

<table class="table mt-3">
    <tr>
        <th>Nombre</th>
        <th>Descripción</th>
        <th>Presentación</th>
        <th>País de Origen</th>
        <th>Precio</th>
        <th>Stock</th>
        <th>Acciones</th>
    </tr>
    @foreach ($productos as $producto)
        <tr>
            <td>{{ $producto->nombre }}</td>
            <td>{{ $producto->descripcion }}</td>
            <td>{{ $producto->presentacion }}</td>
            <td>{{ $producto->pais_origen }}</td>
            <td>{{ $producto->precio }}</td>
            <td>{{ $producto->stock }}</td>
            <td>
                <a class="btn btn-info" href="{{ route('productos.show', $producto->id) }}">Mostrar</a>
                <a class="btn btn-primary" href="{{ route('productos.edit', $producto->id) }}">Editar</a>
                <form action="{{ route('productos.destroy', $producto->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Eliminar</button>
                </form>
            </td>
        </tr>
    @endforeach
</table>
@endsection
