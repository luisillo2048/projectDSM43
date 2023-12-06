<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Categoria as ModelsCategoria;
use Illuminate\Http\Request;

class CategoriaController extends Controller
{
    //

    public function categoria()
     {
        
         $cate = ModelsCategoria::all();
         return view('lugares.categorias',['posts' => $cate]);
     }
}
