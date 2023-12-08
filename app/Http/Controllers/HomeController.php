<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $zonasHorariasMexico = obtenerZonasHorariasMexico();
        $horaActual = obtenerHoraEnZonaMexico();  // Puedes ajustar la zona horaria según tus necesidades
        return view('home', ['zonasHorariasMexico' => $zonasHorariasMexico, 'horaActual' => $horaActual]);
    }
}
