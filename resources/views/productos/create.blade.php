@extends('layouts.app')

@section('content')
<h2>Crear Producto</h2>

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ route('productos.store') }}" method="POST">
    @csrf
    <div class="mb-3">
        <label for="nombre" class="form-label">Nombre</label>
        <input type="text" class="form-control" name="nombre" id="nombre" required>
    </div>
    <div class="mb-3">
        <label for="descripcion" class="form-label">Descripción</label>
        <textarea class="form-control" name="descripcion" id="descripcion" required></textarea>
    </div>
    <div class="mb-3">
        <label for="presentacion" class="form-label">Presentación</label>
        <input type="text" class="form-control" name="presentacion" id="presentacion" required>
    </div>
    <div class="mb-3">
        <label for="pais_origen" class="form-label">País de Origen</label>
        <input type="text" class="form-control" name="pais_origen" id="pais_origen" required>
    </div>
    <div class="mb-3">
        <label for="precio" class="form-label">Precio</label>
        <input type="number" step="0.01" class="form-control" name="precio" id="precio" required>
    </div>
    <div class="mb-3">
        <label for="stock" class="form-label">Stock</label>
        <input type="number" class="form-control" name="stock" id="stock" required>
    </div>
    <button type="submit" class="btn btn-primary">Guardar</button>
</form>
@endsection
