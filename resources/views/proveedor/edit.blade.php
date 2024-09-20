@extends('layouts.app')

@section('content')
    <h1>Editar Proveedor</h1>
    <form action="{{ url('/proveedores/' . $proveedor->id) }}" method="POST">
        @csrf
        @method('PUT')

        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" id="nombre" value="{{ $proveedor->nombre }}" required>

        <label for="direccion">Dirección:</label>
        <input type="text" name="direccion" id="direccion" value="{{ $proveedor->direccion }}" required>

        <label for="telefono">Teléfono:</label>
        <input type="text" name="telefono" id="telefono" value="{{ $proveedor->telefono }}" required>

        <label for="email">Email:</label>
        <input type="email" name="email" id="email" value="{{ $proveedor->email }}" required>

        <button type="submit">Actualizar</button>
    </form>
@endsection
