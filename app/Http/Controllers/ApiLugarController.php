<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Categoria;
use Illuminate\Http\Request;


/**
 * @OA\Info(
 *  title="API lugares ",
 * version="1.0.0",
 * description="Se mostraran diferentes acciones a relaizar",
 *   @OA\Contact(
 *       email= "alexandrorick7@gmail.com",
 *       name= "Yosimar Alejandro Gomez "
 *      ),
 *      @OA\License(
 *          name= "Licencia",
 *          url= "Apache"
 *      )
  
 * )
 */

class ApiLugarController extends Controller
{
    //
    /**
     * @OA\Get(
     *     path="/api/categoria",
     *     tags={"Categoria"},
     *     @OA\Response(
     *          response=200,
     *          description="mostrar todos los productos",
     *     ),
     *    @OA\Response(
     *     response="default",
     *     description="ha ocurrido un error."
     *     )
     * )
     */

    public function index(){
        $cate = Categoria::all();
        return $cate;
    }

     /**
     * Registrar la información de una categoria
     * @OA\Post (
     *     path="/api/categoria",
     *     tags={"Categoria"},
     *     @OA\RequestBody(
     *         @OA\MediaType(
     *             mediaType="application/json",
     *             @OA\Schema(
     *                
     *                      @OA\Property(
     *                          property="categoria",
     *                          type="string"
     *                      ),
     *                     
     *                      
     *                 ),
     *             
     *         )
     *      ),
     *      @OA\Response(
     *          response=201,
     *          description="CREATED",
     *          @OA\JsonContent(
     *              @OA\Property(property="id", type="number", example=1),
     *              @OA\Property(property="categoria", type="string", example="Xona")

     *          )
     *      ),
     *      @OA\Response(
     *          response=422,
     *          description="UNPROCESSABLE CONTENT",
     *          @OA\JsonContent(
     *              @OA\Property(property="message", type="string", example="The apellidos field is required."),
     *              @OA\Property(property="errors", type="string", example="Objeto de errores"),
     *          )
     *      )
     * )
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'categoria'   => 'required',
         
        ]);

        
        $cliente = new Categoria();
        $cliente->categoria   = $request->categoria;
        $cliente->save();
        // return response()->json([
        //     'message' => 'Producto registrado exitosamente',
        //     'categoria' => $cliente
        // ]);
        
    }

     /**
     * @OA\Get(
     *     path="/api/categoria/{id_categoria}",
     *     tags={"Categoria"},
     *     summary="Obtener el producto por identificador",
     *     description="Obtiene un producto especifico segun su identificador.",
     *     @OA\Parameter( 
     *     name= "id_categoria",
     *     in= "path",
     *     required=true,
     *     description="Identificador unico del producto",
     *     @OA\Schema(
     *     type="integer",
     *     format="int64"
     *     )
     *    ),
     *    @OA\Response(
     *    response=200,
     *    description="Producto obtenido exitosamente."
     *   )
     * )
     */


     public function getProductById($id_categoria)
     {
         $categ = Categoria::find($id_categoria);
         return response()->json($categ);
     }
}
