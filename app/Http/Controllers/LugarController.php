<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LugarController extends Controller
{
    public function index()
    {
        return view('lugares.index');
    }

    public function categorias()
    {
        return view('lugares.categorias');
    }
    
    public function municipios()
    {
        return view('lugares.municipios');
    }
}