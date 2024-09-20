<?php

namespace App\Http\Controllers;

use App\Models\Arl;
use Illuminate\Http\Request;

class ArlController extends Controller
{
    public function index()
    {
        $arls = Arl::all();
        return view('arls.index', compact('arls'));
    }

    public function create()
    {
        return view('arls.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required',
            'descripcion' => 'required',
        ]);

        Arl::create($request->all());

        return redirect()->route('arls.index')->with('success', 'ARL creada exitosamente.');
    }

    public function show(Arl $arl)
    {
        return view('arls.show', compact('arl'));
    }

    public function edit(Arl $arl)
    {
        return view('arls.edit', compact('arl'));
    }

    public function update(Request $request, Arl $arl)
    {
        $request->validate([
            'nombre' => 'required',
            'descripcion' => 'required',
        ]);

        $arl->update($request->all());

        return redirect()->route('arls.index')->with('success', 'ARL actualizada exitosamente.');
    }

    public function destroy(Arl $arl)
    {
        $arl->delete();
        return redirect()->route('arls.index')->with('success', 'ARL eliminada exitosamente.');
    }
}
