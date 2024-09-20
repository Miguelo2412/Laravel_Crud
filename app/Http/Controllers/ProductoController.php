<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use Illuminate\Http\Request;

class ProductoController extends Controller
{
    public function index()
    {
        $productos = Producto::all();
        return view('productos.index', compact('productos'));
    }

    public function create()
    {
        return view('productos.create');
    }

    public function store(Request $request)
    {
        // Validación de datos
        $request->validate([
            'nombre' => 'required',
            'descripcion' => 'required',
            'presentacion' => 'required',
            'pais_origen' => 'required',
            'precio' => 'required|numeric',
            'stock' => 'required|integer',
        ]);

        // Creación del producto
        Producto::create($request->all());

        // Redirección con mensaje de éxito
        return redirect()->route('productos.index')
            ->with('success', 'Producto creado exitosamente.');
    }

    public function show(Producto $producto)
    {
        return view('productos.show', compact('producto'));
    }

    public function edit(Producto $producto)
    {
        return view('productos.edit', compact('producto'));
    }

    public function update(Request $request, Producto $producto)
    {
        // Validación de datos
        $request->validate([
            'nombre' => 'required',
            'descripcion' => 'required',
            'presentacion' => 'required',
            'pais_origen' => 'required',
            'precio' => 'required|numeric',
            'stock' => 'required|integer',
        ]);

        // Actualización del producto
        $producto->update($request->all());

        // Redirección con mensaje de éxito
        return redirect()->route('productos.index')
            ->with('success', 'Producto actualizado exitosamente.');
    }

    public function destroy(Producto $producto)
    {
        // Eliminación del producto
        $producto->delete();

        // Redirección con mensaje de éxito
        return redirect()->route('productos.index')
            ->with('success', 'Producto eliminado exitosamente.');
    }
}
