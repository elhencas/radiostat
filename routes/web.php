<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArtistaController;
use App\Http\Controllers\CancioneController;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\EstadisticaController;
use App\Http\Controllers\GeneroController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
  return view('inicio',['titulo'=>'Inicio']);
})->name('inicio');

Route::get('/artistas',[ArtistaController::class,'index']);

Route::get('/generos',[GeneroController::class,'index']);

Route::get('/canciones',[CancioneController::class,'index']);

Route::get('/categorias',[CategoriaController::class,'index']);

Route::get('/estadisticas',[EstadisticaController::class,'index']);


/*  Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
 */
