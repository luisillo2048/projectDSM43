<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Models\Categoria;
use App\Models\Estado;
use App\Models\Municipio;
use App\Models\Sitio;
use App\Models\Direccion;
use Illuminate\Http\Request;


/**
 * @OA\Info(
 *  title="API lugares ",
 * version="1.0.0",
 * description="Se mostraran diferentes acciones a relaizar",
 *   @OA\Contact(
 *       email= "alexandrorick7@gmail.com",
 *       name= "Proyecto Laravel DSM-43"
 *      ),
 *      @OA\License(
 *          name= "Licencia",
 *          url= "Apache"
 *      )
  
 * )
 */

class ApiLugarController extends Controller
{

///////////////////////////////mostrar todo//////////////////////////////////////////////////////////////////

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

    public function indexCategoria(){
        $cate = Categoria::all();
        return $cate;
    }

    //
    /**
     * @OA\Get(
     *     path="/api/estado",
     *     tags={"Estado"},
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

     public function indexEstado(){
        $cate = Estado::all();
        return $cate;
    }

    //
    /**
     * @OA\Get(
     *     path="/api/municipio",
     *     tags={"Municipio"},
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

     public function indexMunicipio(){
        $cate = Municipio::all();
        return $cate;
    }

    //
    /**
     * @OA\Get(
     *     path="/api/sitio",
     *     tags={"Sitio"},
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

     public function indexSitio(){
        $cate = Sitio::all();
        return $cate;
    }

    //
    /**
     * @OA\Get(
     *     path="/api/direccion",
     *     tags={"Direccion"},
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

     public function indexDireccion(){
        $cate = Direccion::all();
        return $cate;
    }

/////////////////////////////////////////////Insertar//////////////////////////////////////////////////

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
    public function storeCategoria(Request $request)
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
     * Registrar la información de una estado
     * @OA\Post (
     *     path="/api/estado",
     *     tags={"Estado"},
     *     @OA\RequestBody(
     *         @OA\MediaType(
     *             mediaType="application/json",
     *             @OA\Schema(
     *                
     *                      @OA\Property(
     *                          property="estado",
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
     *              @OA\Property(property="estado", type="string", example="Toluca")

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
    public function storeEstado(Request $request)
    {
        //
        $request->validate([
            'estado'   => 'required',
         
        ]);

        
        $cliente = new Estado();
        $cliente->estado   = $request->estado;
        $cliente->save();
        // return response()->json([
        //     'message' => 'Se registro exitosamente',
        //     'estado' => $cliente
        // ]);
        
    }

     /**
     * Registrar la información de una municipio
     * @OA\Post (
     *     path="/api/municipio",
     *     tags={"Municipio"},
     *     @OA\RequestBody(
     *         @OA\MediaType(
     *             mediaType="application/json",
     *             @OA\Schema(
     *                
     *                      @OA\Property(
     *                          property="municipio",
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
     *              @OA\Property(property="municipio", type="string", example="Xona")

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
    public function storeMunicipio(Request $request)
    {
        //
        $request->validate([
            'municipio'   => 'required',
         
        ]);

        
        $cliente = new Municipio();
        $cliente->municipio   = $request->municipio;
        $cliente->save();
        // return response()->json([
        //     'message' => 'Producto registrado exitosamente',
        //     'municipio' => $cliente
        // ]);
        
    }

     /**
     * Registrar la información de una sitio
     * @OA\Post (
     *     path="/api/sitio",
     *     tags={"Sitio"},
     *     @OA\RequestBody(
     *         @OA\MediaType(
     *             mediaType="application/json",
     *             @OA\Schema(
     *                
     *                      @OA\Property(
     *                          property="nombre",
     *                          type="string"
     *                      ),
     *                      @OA\Property(
     *                          property="telefono",
     *                          type="number"
     *                      ),
     *                      @OA\Property(
     *                          property="id_categoria1",
     *                          type="number"
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
     *              @OA\Property(property="sitio", type="string", example="Xona")

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
    public function storeSitio(Request $request)
    {
        //
        $request->validate([
            'nombre'   => 'required',
            'telefono' => 'required',
            'id_categoria1' => 'required|exists:categoria,id_categoria'
         
        ]);
        
        $cliente = new Sitio();
        $cliente->nombre = $request->nombre;
        $cliente->telefono = $request->telefono;
        $cliente->id_categoria1 = $request->id_categoria1;
        $cliente->save();
        // return response()->json([
        //     'message' => 'Producto registrado exitosamente',
        //     'nombre' => $cliente
        // ]);
        
    }

     /**
     * Registrar la información de una direccion
     * @OA\Post (
     *     path="/api/direccion",
     *     tags={"Direccion"},
     *     @OA\RequestBody(
     *         @OA\MediaType(
     *             mediaType="application/json",
     *             @OA\Schema(
     *                
     *                      @OA\Property(
     *                          property="calle",
     *                          type="string"
     *                      ),
     *                      @OA\Property(
     *                          property="num",
     *                          type="number"
     *                      ),
     *                      @OA\Property(
     *                          property="colonia",
     *                          type="string"
     *                      ),
     *                      @OA\Property(
     *                          property="id_municipio1",
     *                          type="number"
     *                      ),
     *                      @OA\Property(
     *                          property="id_estado1",
     *                          type="number"
     *                      ),
     *                      @OA\Property(
     *                          property="id_sitio1",
     *                          type="number"
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
     *              @OA\Property(property="direccion", type="string", example="Xona")

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
    public function storeDireccion(Request $request)
    {
        //
        $request->validate([
            'calle'   => 'required',
            'num' => 'required',
            'colonia'   => 'required',
            'id_municipio1' => 'required|exists:municipio,id_municipio',
            'id_estado1' => 'required|exists:estado,id_estado',
            'id_sitio1' => 'required|exists:sitio,id_sitio'
        ]);
        
        $cliente = new Direccion();
        $cliente->calle = $request->calle;
        $cliente->num = $request->num;
        $cliente->colonia = $request->colonia;
        $cliente->id_municipio1 = $request->id_municipio1;
        $cliente->id_estado1 = $request->id_estado1;
        $cliente->id_sitio1 = $request->id_sitio1;
        $cliente->save();
        // return response()->json([
        //     'message' => 'Producto registrado exitosamente',
        //     'nombre' => $cliente
        // ]);
        
    }

//////////////////////////////////////////////Buscar/////////////////////////////////////////////////////////////////////

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


     public function getCategoriaById($id_categoria)
     {
         $categ = Categoria::find($id_categoria);
         return response()->json($categ);
     }

      /**
     * @OA\Get(
     *     path="/api/estado/{id_estado}",
     *     tags={"Estado"},
     *     summary="Obtener el producto por identificador",
     *     description="Obtiene un producto especifico segun su identificador.",
     *     @OA\Parameter( 
     *     name= "id_estado",
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


     public function getEstadoById($id_estado)
     {
         $categ = Estado::find($id_estado);
         return response()->json($categ);
     }

     /**
     * @OA\Get(
     *     path="/api/municipio/{id_municipio}",
     *     tags={"Municipio"},
     *     summary="Obtener el producto por identificador",
     *     description="Obtiene un producto especifico segun su identificador.",
     *     @OA\Parameter( 
     *     name= "id_municipio",
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


     public function getMunicipioById($id_municipio)
     {
         $categ = Municipio::find($id_municipio);
         return response()->json($categ);
     }

      /**
     * @OA\Get(
     *     path="/api/sitio/{id_sitio}",
     *     tags={"Sitio"},
     *     summary="Obtener el producto por identificador",
     *     description="Obtiene un producto especifico segun su identificador.",
     *     @OA\Parameter( 
     *     name= "id_sitio",
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


     public function getSitioById($id_sitio)
     {
         $categ = Sitio::find($id_sitio);
         return response()->json($categ);
     }

       /**
     * @OA\Get(
     *     path="/api/direccion/{id_direccion}",
     *     tags={"Direccion"},
     *     summary="Obtener el producto por identificador",
     *     description="Obtiene un producto especifico segun su identificador.",
     *     @OA\Parameter( 
     *     name= "id_direccion",
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


     public function getDireccionById($id_direccion)
     {
         $categ = Direccion::find($id_direccion);
         return response()->json($categ);
     }

//////////////////////////////////////////////Eliminar/////////////////////////////////////////////////////////////////////

    /**
     * Eliminar el producto por identificador
     * @OA\Delete (
     *     path="/api/categoria/{id_categoria}",
     *     tags={"Categoria"},
     *     @OA\Parameter(
     *         in="path",
     *         name="id_categoria",
     *         required=true,
     *         @OA\Schema(type="string")
     *     ),
     *     @OA\Response(
     *         response=204,
     *         description="NO CONTENT"
     *     ),
     *      @OA\Response(
     *          response=200,
     *          description="OPERATION SUCCEFUL",
     *          @OA\JsonContent(
     *              @OA\Property(property="message", type="string", example="Se pudo realizar correctamente la operación"),
     *          )
     *      )
     * )
     */

     public function destroyCategoria(string $id_categoria)
     {
         $cliente = Categoria::find($id_categoria);
 
         if(is_null($cliente))
         {
             return response()->json(['message' => 'No se pudo realizar correctamente la operación'],404);
         }
 
         $cliente->delete();
 
         return response()->noContent();
     }

     /**
     * Eliminar el producto por identificador
     * @OA\Delete (
     *     path="/api/estado/{id_estado}",
     *     tags={"Estado"},
     *     @OA\Parameter(
     *         in="path",
     *         name="id_estado",
     *         required=true,
     *         @OA\Schema(type="string")
     *     ),
     *     @OA\Response(
     *         response=204,
     *         description="NO CONTENT"
     *     ),
     *      @OA\Response(
     *          response=200,
     *          description="OPERATION SUCCEFUL",
     *          @OA\JsonContent(
     *              @OA\Property(property="message", type="string", example="Se pudo realizar correctamente la operación"),
     *          )
     *      )
     * )
     */

     public function destroyEstado(string $id_estado)
     {
         $cliente = Estado::find($id_estado);
 
         if(is_null($cliente))
         {
             return response()->json(['message' => 'No se pudo realizar correctamente la operación'],404);
         }
 
         $cliente->delete();
 
         return response()->noContent();
     }

     /**
     * Eliminar el producto por identificador
     * @OA\Delete (
     *     path="/api/municipio/{id_municipio}",
     *     tags={"Municipio"},
     *     @OA\Parameter(
     *         in="path",
     *         name="id_municipio",
     *         required=true,
     *         @OA\Schema(type="string")
     *     ),
     *     @OA\Response(
     *         response=204,
     *         description="NO CONTENT"
     *     ),
     *      @OA\Response(
     *          response=200,
     *          description="OPERATION SUCCEFUL",
     *          @OA\JsonContent(
     *              @OA\Property(property="message", type="string", example="Se pudo realizar correctamente la operación"),
     *          )
     *      )
     * )
     */

     public function destroyMunicipio(string $id_municipio)
     {
         $cliente = Municipio::find($id_municipio);
 
         if(is_null($cliente))
         {
             return response()->json(['message' => 'No se pudo realizar correctamente la operación'],404);
         }
 
         $cliente->delete();
 
         return response()->noContent();
     }

     /**
     * Eliminar el producto por identificador
     * @OA\Delete (
     *     path="/api/sitio/{id_sitio}",
     *     tags={"Sitio"},
     *     @OA\Parameter(
     *         in="path",
     *         name="id_sitio",
     *         required=true,
     *         @OA\Schema(type="string")
     *     ),
     *     @OA\Response(
     *         response=204,
     *         description="NO CONTENT"
     *     ),
     *      @OA\Response(
     *          response=200,
     *          description="OPERATION SUCCEFUL",
     *          @OA\JsonContent(
     *              @OA\Property(property="message", type="string", example="Se pudo realizar correctamente la operación"),
     *          )
     *      )
     * )
     */

     public function destroySitio(string $id_sitio)
    {
        // Desactivar temporalmente las restricciones de clave externa
        DB::statement('SET FOREIGN_KEY_CHECKS=0');

        $cliente = Sitio::find($id_sitio);

        if (is_null($cliente)) {
            return response()->json(['message' => 'No se pudo realizar correctamente la operación'], 404);
        }

        $cliente->delete();

        // Volver a activar las restricciones de clave externa
        DB::statement('SET FOREIGN_KEY_CHECKS=1');

        return response()->noContent();
    }

    /**
     * Eliminar el producto por identificador
     * @OA\Delete (
     *     path="/api/direccion/{id_direccion}",
     *     tags={"Direccion"},
     *     @OA\Parameter(
     *         in="path",
     *         name="id_direccion",
     *         required=true,
     *         @OA\Schema(type="string")
     *     ),
     *     @OA\Response(
     *         response=204,
     *         description="NO CONTENT"
     *     ),
     *      @OA\Response(
     *          response=200,
     *          description="OPERATION SUCCEFUL",
     *          @OA\JsonContent(
     *              @OA\Property(property="message", type="string", example="Se pudo realizar correctamente la operación"),
     *          )
     *      )
     * )
     */

     public function destroyDireccion(string $id_direccion)
    {
        // Desactivar temporalmente las restricciones de clave externa
        DB::statement('SET FOREIGN_KEY_CHECKS=0');

        $cliente = Direccion::find($id_direccion);

        if (is_null($cliente)) {
            return response()->json(['message' => 'No se pudo realizar correctamente la operación'], 404);
        }

        $cliente->delete();

        // Volver a activar las restricciones de clave externa
        DB::statement('SET FOREIGN_KEY_CHECKS=1');

        return response()->noContent();
    }

//////////////////////////////////////////////Modificar/////////////////////////////////////////////////////////////////////

    /**
     * @OA\PUT(
     *  path="/api/categoria/{id_categoria}",
     *  tags={"Categoria"},
     *  summary="Editar un producto por identificador",
     *  description="Editar un producto existente",
     *  @OA\Parameter(
     *      name="id_categoria",
     *      in="path",
     *      required=true,
     *      description="Identificador único de producto",
     *      @OA\Schema(
     *          type="integer",
     *          format="int64"
     *      )
     *  ),
     *  @OA\RequestBody(
     *      required=true,
     *      @OA\MediaType(
     *          mediaType="application/json",
     *          @OA\Schema(
     *              type="object",
     * 
     *              @OA\Property(
     *                  property="categoria",
     *                  type="string",
     *                  description="categoria"
     *              ),
     *          )
     *      )
     *  ),
     *  @OA\Response(
     *      response=200,
     *      description="Producto editado exitosamente"
     *  )
     * )
     */

     public function updateCategoria($id_categoria, Request $request)
     {
         $product = Categoria::find($id_categoria);
         if (!$product) {
             return response()->json(['message' => 'Producto no encontrado'], 404);
         }
 
         $product->update($request->only(['categoria']));
         $product->save();
 
         $cliente = Categoria::find($id_categoria);
 
         return response()->json([
             'message' => 'Producto editado exitosamente',
             'product' => $cliente
         ]);
     }

    /**
     * @OA\PUT(
     *  path="/api/estado/{id_estado}",
     *  tags={"Estado"},
     *  summary="Editar un producto por identificador",
     *  description="Editar un producto existente",
     *  @OA\Parameter(
     *      name="id_estado",
     *      in="path",
     *      required=true,
     *      description="Identificador único de producto",
     *      @OA\Schema(
     *          type="integer",
     *          format="int64"
     *      )
     *  ),
     *  @OA\RequestBody(
     *      required=true,
     *      @OA\MediaType(
     *          mediaType="application/json",
     *          @OA\Schema(
     *              type="object",
     * 
     *              @OA\Property(
     *                  property="estado",
     *                  type="string",
     *                  description="estado"
     *              ),
     *          )
     *      )
     *  ),
     *  @OA\Response(
     *      response=200,
     *      description="Producto editado exitosamente"
     *  )
     * )
     */

     public function updateEstado($id_estado, Request $request)
     {
         $product = Estado::find($id_estado);
         if (!$product) {
             return response()->json(['message' => 'Producto no encontrado'], 404);
         }
 
         $product->update($request->only(['estado']));
         $product->save();
 
         $cliente = Estado::find($id_estado);
 
         return response()->json([
             'message' => 'Producto editado exitosamente',
             'product' => $cliente
         ]);
     }

     /**
     * @OA\PUT(
     *  path="/api/municipio/{id_municipio}",
     *  tags={"Municipio"},
     *  summary="Editar un producto por identificador",
     *  description="Editar un producto existente",
     *  @OA\Parameter(
     *      name="id_municipio",
     *      in="path",
     *      required=true,
     *      description="Identificador único de producto",
     *      @OA\Schema(
     *          type="integer",
     *          format="int64"
     *      )
     *  ),
     *  @OA\RequestBody(
     *      required=true,
     *      @OA\MediaType(
     *          mediaType="application/json",
     *          @OA\Schema(
     *              type="object",
     * 
     *              @OA\Property(
     *                  property="municipio",
     *                  type="string",
     *                  description="municipio"
     *              ),
     *          )
     *      )
     *  ),
     *  @OA\Response(
     *      response=200,
     *      description="Producto editado exitosamente"
     *  )
     * )
     */

     public function updateMunicipio($id_municipio, Request $request)
     {
         $product = Municipio::find($id_municipio);
         if (!$product) {
             return response()->json(['message' => 'Producto no encontrado'], 404);
         }
 
         $product->update($request->only(['municipio']));
         $product->save();
 
         $cliente = Municipio::find($id_municipio);
 
         return response()->json([
             'message' => 'Producto editado exitosamente',
             'product' => $cliente
         ]);
     }

    /**
     * @OA\PUT(
     *  path="/api/sitio/{id_sitio}",
     *  tags={"Sitio"},
     *  summary="Editar un producto por identificador",
     *  description="Editar un producto existente",
     *  @OA\Parameter(
     *      name="id_sitio",
     *      in="path",
     *      required=true,
     *      description="Identificador único de producto",
     *      @OA\Schema(
     *          type="integer",
     *          format="int64"
     *      )
     *  ),
     *  @OA\RequestBody(
     *      required=true,
     *      @OA\MediaType(
     *          mediaType="application/json",
     *          @OA\Schema(
     *              type="object",
     * 
     *              @OA\Property(
     *                  property="nombre",
     *                  type="string",
     *                  description="nombre"
     *              ),
     *              @OA\Property(
     *                  property="telefono",
     *                  type="number",
     *                  description="telefono"
     *              ),
     *              @OA\Property(
     *                  property="id_categoria1",
     *                  type="number",
     *                  description="id de la categoria"
     *              ),
     *          )
     *      )
     *  ),
     *  @OA\Response(
     *      response=200,
     *      description="Producto editado exitosamente"
     *  )
     * )
     */

     public function updateSitio($id_sitio, Request $request)
     {
         $product = Sitio::find($id_sitio);
         if (!$product) {
             return response()->json(['message' => 'Producto no encontrado'], 404);
         }
 
         $product->update($request->only(['nombre', 'telefono','id_categoria1']));
         $product->save();
 
         $cliente = Sitio::find($id_sitio);
 
         return response()->json([
             'message' => 'Producto editado exitosamente',
             'product' => $cliente
         ]);
     }

    /**
     * @OA\PUT(
     *  path="/api/direccion/{id_direccion}",
     *  tags={"Direccion"},
     *  summary="Editar un producto por identificador",
     *  description="Editar un producto existente",
     *  @OA\Parameter(
     *      name="id_direccion",
     *      in="path",
     *      required=true,
     *      description="Identificador único de producto",
     *      @OA\Schema(
     *          type="integer",
     *          format="int64"
     *      )
     *  ),
     *  @OA\RequestBody(
     *      required=true,
     *      @OA\MediaType(
     *          mediaType="application/json",
     *          @OA\Schema(
     *              type="object",
     * 
     *              @OA\Property(
     *                  property="calle",
     *                  type="string",
     *                  description="calle"
     *              ),
     *              @OA\Property(
     *                  property="num",
     *                  type="number",
     *                  description="numero interior"
     *              ),
     *              @OA\Property(
     *                  property="colonia",
     *                  type="string",
     *                  description="colonia"
     *              ),
     *              @OA\Property(
     *                  property="id_municipio1",
     *                  type="number",
     *                  description="id de municipio"
     *              ),
     *              @OA\Property(
     *                  property="id_estado1",
     *                  type="number",
     *                  description="id de estado"
     *              ),
     *              @OA\Property(
     *                  property="id_sitio1",
     *                  type="number",
     *                  description="id de sitio"
     *              ),
     *          )
     *      )
     *  ),
     *  @OA\Response(
     *      response=200,
     *      description="Producto editado exitosamente"
     *  )
     * )
     */

     public function updateDireccion($id_direccion, Request $request)
     {
         $product = Direccion::find($id_direccion);
         if (!$product) {
             return response()->json(['message' => 'Producto no encontrado'], 404);
         }
 
         $product->update($request->only(['calle', 'num','colonia', 'id_municipio1', 'id_estado1','id_sitio1']));
         $product->save();
 
         $cliente = Direccion::find($id_direccion);
 
         return response()->json([
             'message' => 'Producto editado exitosamente',
             'product' => $cliente
         ]);
     }

}