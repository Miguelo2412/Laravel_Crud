@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Lista de ARL</h1>
    <a href="{{ route('arl.create') }}" class="btn btn-success mb-3">Agregar ARL</a>
    
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Código</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($arls as $arl)
                <tr>
                    <td>{{ $arl->id }}</td>
                    <td>{{ $arl->nombre }}</td>
                    <td>{{ $arl->codigo }}</td>
                    <td>
                        <a href="{{ route('arl.edit', $arl->id) }}" class="btn btn-primary">Editar</a>
                        <form action="{{ route('arl.destroy', $arl->id) }}" method="POST" style="display:inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
