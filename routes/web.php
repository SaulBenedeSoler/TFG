<?php

use App\Http\Controllers\ComidaController;
use App\Http\Controllers\EntradaController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MovieController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PromocionesController;
use App\Http\Controllers\SalaController;
use App\Http\Controllers\ticketController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;


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


/*RUTAS USUARIO*/
Route::get('/index', function () {
    return view('index');
})->middleware(['auth', 'verified'])->name('index');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

/*RUTAS ADMINISTRADOR*/

/*RUTA AL INDEX DEL ADMINISTRADOR*/
Route::get('admin_index', [HomeController::class, 'index'])->name('admin.index');
Route::get('movies/create', [MovieController::class, 'create'])->name('movies.create');
Route::post('movies', [MovieController::class, 'store'])->name('movies.store');
Route::get('/eliminar-pelicula/{id}', [MovieController::class, 'eliminarPelicula'])->name('eliminar.pelicula');



/*RUTAS MOVIE*/
Route::get('/show/{id}', [MovieController::class, 'show'])->name('movies');
Route::get('/movies/mostrar/{semana_id}', [MovieController::class, 'mostrar'])->name('Movies.porSemana');
Route::get('/movies/mostrar/{numeroSemana}', [MovieController::class, 'mostrarPorSemana'])->name('Movies.mostrar');
Route::get('/movies/{id}/info', [MovieController::class, 'infoPeli'])->name('movies.info');
Route::get('/show/{id}', [MovieController::class, 'show'])->name('show');

/*RUTAS COMIDAS*/
Route::get('/menus', [ComidaController::class, 'index'])->name('comida.index');

Route::get('/menus/{id}', 'ComidaController@show')->name('comida.show');

/*RUTA ENTRADAS*/
Route::get('/entradas', [EntradaController::class, 'index'])->name('entrada.index');

/*RUTA PROMOCIONES*/
Route::get('/promociones', [PromocionesController::class, 'index'])->name('promociones.show');


Route::get('/salas/create', [SalaController::class, 'create'])->name('salas.create');
Route::get('/sala/{movieID}', [SalaController::class, 'generarSala'])->name('generarSala');




Route::get('entradas/{ticket}', [ticketController::class, 'show'])->name('entradas.show');
Route::get('/tickets', [TicketController::class, 'store'])->name('entradas.store');

