@extends('layouts.app')

@section('content')
    <h1>Agregar Proveedor</h1>
    <form action="{{ url('/proveedores') }}" method="POST">
        @csrf
        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" id="nombre" required>

        <label for="direccion">Dirección:</label>
        <input type="text" name="direccion" id="direccion" required>

        <label for="telefono">Teléfono:</label>
        <input type="text" name="telefono" id="telefono" required>

        <label for="email">Email:</label>
        <input type="email" name="email" id="email" required>

        <button type="submit">Guardar</button>
    </form>
@endsection
