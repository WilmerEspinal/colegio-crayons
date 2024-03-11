<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EstudianteController extends Controller
{
    //
    public function index()
    {
        return view('pages.home');
        return view('pages.home');
    }
    public function preInscripcion()
    {
        return view('pages.preinscripcion');
    }
    public function nosotros()
    {
        return view('pages.nosotros');
    }
}
