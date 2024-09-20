<?php

namespace App\Http\Controllers;

use App\Models\Proveedor;
use Illuminate\Http\Request;

class ProveedorController extends Controller
{
    public function create()
    {
        return view('proveedor.create');
    }

    public function store(Request $request)
    {
        Proveedor::create($request->all());
        return redirect('/proveedores');
    }

    public function index()
    {
        $proveedores = Proveedor::all();
        return view('proveedor.index', compact('proveedores'));
    }

    public function edit($id)
{
    $proveedor = Proveedor::findOrFail($id);
    return view('proveedor.edit', compact('proveedor'));
}

public function update(Request $request, $id)
{
    $proveedor = Proveedor::findOrFail($id);
    $proveedor->update($request->all());
    return redirect('/proveedores');
}
public function destroy($id)
{
    $proveedor = Proveedor::findOrFail($id);
    $proveedor->delete();
    return redirect('/proveedores');
}


}
