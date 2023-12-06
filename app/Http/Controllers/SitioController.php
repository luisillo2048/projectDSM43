<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Categoria;
use App\Models\Sitio;
use Illuminate\Http\Request;

class SitioController extends Controller
{
    //

    public function sitio()
    {
       
        $cate = Sitio::all();
        return view('lugares.lugares',['posts' => $cate]);
    }

    public function data(){
        $post = Categoria::with ('categoria')->get();

        return view ('lugares.lugares',['post' => $post]);

        }
}
