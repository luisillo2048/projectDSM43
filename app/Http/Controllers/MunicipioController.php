<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Municipio;
use Illuminate\Http\Request;

class MunicipioController extends Controller
{
    //
    public function municipio()
    {
       
        $cate = Municipio::all();
        return view('lugares.municipios',['posts' => $cate]);
    }
}
