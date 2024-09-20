<?php

namespace App\Http\Controllers;

use App\Models\User;  // Asegúrate de importar el modelo User

class UserController extends Controller
{
    public function index()
    {
        // Obtener todos los usuarios
        $users = User::all();

        // Pasar los datos de los usuarios a la vista 'users.index'
        return view('users.index', ['users' => $users]);
    }
}

