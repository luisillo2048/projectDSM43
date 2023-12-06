<?php
use App\Http\Controllers\LugarController;
use App\Http\Controllers\CategoriaController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
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
///////////////////////Vistas///////////////////
Route::get('lugares/index', [LugarController::class, 'index'])->name('lugares.index');
Route::get('lugares/categorias', [LugarController::class, 'categorias'])->name('lugares.categorias');
Route::get('lugares/municipios', [LugarController::class, 'municipios'])->name('lugares.municipios');
Route::get('lugares/lugares', [LugarController::class, 'lugares'])->name('lugares.lugares');
Route::get('auth/login', [LugarController::class, 'login'])->name('auth.login');
Route::post('auth/register', [LugarController::class, 'register'])->name('auth.register');
Auth::routes();

/////////////////////////////Cards///////////////////////////////////
Route::get('lugares/categorias',[App\Http\Controllers\CategoriaController::class, 'categoria'])->name('lugares.categorias');
Route::get('lugares/municipios',[App\Http\Controllers\MunicipioController::class, 'municipio'])->name('lugares.municipios');
Route::get('lugares/lugares',[App\Http\Controllers\SitioController::class, 'sitio'])->name('lugares.lugares');
Auth::routes();


////////////////////////////////
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
