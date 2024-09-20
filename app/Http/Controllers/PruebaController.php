<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PruebaController extends Controller
{
    public function home()
    {
        return view('prueba.home');
    }

    public function mision()
    {
        return view('prueba.mision');
    }

    public function vision()
    {
        return view('prueba.vision');
    }

    public function quienesSomos()
    {
        return view('prueba.quienes-somos');
    }
}