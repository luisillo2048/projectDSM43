<?php
use App\Http\Controllers\LugarController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('index');
});

Route::get('lugares/index', [LugarController::class, 'index'])->name('lugares.index');
Route::get('lugares/categorias', [LugarController::class, 'categorias'])->name('lugares.categorias');
Route::get('lugares/municipios', [LugarController::class, 'municipios'])->name('lugares.municipios');