<?php

use App\Http\Controllers\CarritoController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\ComidaController;
use App\Http\Controllers\EntradaController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MovieController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PromocionesController;
use App\Http\Controllers\SalaController;
use App\Http\Controllers\ticketController;
use App\Models\Bebidas;
use App\Models\Food_Solo;
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
/*RUTA A LA VISTA DE CREACIÓN DE PELÍCULAS DEL ADMINISTRADOR*/
Route::get('movies/create', [MovieController::class, 'create'])->name('movies.create');
/*RUTAS USUARIOS ADMIN*/

/*RUTA A LA VISTA INDEX DEL ADMINISTRADOR*/
Route::get('/admin', [HomeController::class, 'index'])->name('admin.index');
/*RUTAS A LAS FUNCIONES AÑADIR, MOSTRAR,MODIFICAR Y ELIMINAR USUARIOS DEL ADMINSITRADOR*/ 
Route::post('/usuarios/store', [HomeController::class, 'store'])->name('admin.store');
Route::get('/usuarios', [HomeController::class, 'showUsuarios'])->name('usuarios.mostrar');
Route::put('usuarios/{id}', [HomeController::class, 'update'])->name('admin.update');
Route::get('admin/editar/{id}', [HomeController::class, 'adedit'])->name('admin.editar');
Route::put('admin/actualizar/{id}', [HomeController::class, 'adupdate'])->name('admin.actualizar');
Route::delete('admin/borrar/{id}', [HomeController::class, 'adborrar'])->name('admin.borrar');
Route::get('/usuarios/{id}/usuario', [HomeController::class, 'infoPeli'])->name('movies.info');;
Route::post('admin/store', [HomeController::class, 'store'])->name('admin.store');
Route::get('admin/add', [HomeController::class, 'create'])->name('admin.add');
/*RUTAS MOVIE ADMIN*/
Route::delete('/eliminarPelícula/{id}', [MovieController::class, 'eliminarPelicula'])->name('eliminar.pelicula');
Route::get('/movies/{id}/edit', [MovieController::class, 'edit'])->name('form.edit');
Route::put('movies/update/{id}', [MovieController::class, 'update'])->name('movies.update');
Route::delete('movies/{movie}', [MovieController::class, 'destroy'])->name('movies.destroy');
Route::delete('usuarios/{movie}', [MovieController::class, 'destroy'])->name('admin.destroy');
Route::get('admin/movies', [MovieController::class, 'showAdmin'])->name('admin.moviesShow');
Route::post('movies', [MovieController::class, 'store'])->name('movies.store');
Route::get('/movies/create', [MovieController::class, 'create'])->name('movies.create');
Route::get('movies/{id}', [MovieController::class, 'show'])->name('movies.info');

/*RUTAS COMIDA ADMIN*/
Route::get('comida/adminshow', [ComidaController::class, 'adminComshow'])->name('comida.adminComshow');
Route::get('comida/add', [ComidaController::class, 'create'])->name('comida.add');
Route::post('comida/store', [ComidaController::class, 'store'])->name('comida.store');
Route::get('comida/editar/{id}', [ComidaController::class, 'edit'])->name('comida.edit');
Route::delete('comida/{id}', [ComidaController::class, 'destroy'])->name('comida.destroy');
Route::put('movies/{id}', [ComidaController::class, 'update'])->name('comida.update');
/*RUTAS PROMOCION ADMIN*/ 
Route::get('promocion/adminshow', [PromocionesController::class, 'showProm'])->name('promociones.adminshow');
Route::get('promocion/add', [PromocionesController::class, 'create'])->name('promociones.add');
Route::post('promocion/store', [PromocionesController::class, 'store'])->name('promociones.store');
Route::get('promocion/editar/{id}', [PromocionesController::class, 'edit'])->name('promociones.edit');
Route::delete('promocion/{id}', [PromocionesController::class, 'destroy'])->name('promociones.destroy');
Route::put('promocion/{id}', [PromocionesController::class, 'update'])->name('promociones.update');


/*RUTAS MOVIE*/
Route::get('/show/{id}', [MovieController::class, 'show'])->name('movies');
Route::get('/movies/mostrar/{semana_id}', [MovieController::class, 'mostrar'])->name('Movies.porSemana');
Route::get('/movies/mostrar/{numeroSemana}', [MovieController::class, 'mostrarPorSemana'])->name('Movies.mostrar');
Route::get('/movies/{id}/info', [MovieController::class, 'infoPeli'])->name('movies.info');
Route::get('/show/{id}', [MovieController::class, 'show'])->name('show');

/*RUTAS COMIDAS*/
Route::get('/menus', [ComidaController::class, 'index'])->name('comida.index');

Route::get('/menus/{id}', [ComidaController::class, 'show'])->name('comida.show');


/*RUTA PROMOCIONES*/
Route::get('/promociones', [PromocionesController::class, 'index'])->name('promociones.show');


Route::get('/generarSala/{movieID}/{horario?}', [SalaController::class, 'generarSala'])->name('generarSala');
Route::get('/sala/{id}', [SalaController::class, 'showSala'])->name('sala.show');

Route::post('/menu/select', [ComidaController::class, 'seleccionarMenu'])->name('comida.select');

Route::post('entradas/store/{movieID}/{fila}/{asiento}', [TicketController::class, 'store'])->name('entradas.store');
Route::get('entradas/{ticket}', [ticketController::class, 'show'])->name('entradas.show');


Route::get('/{id}', [CarritoController::class, 'show'])->name('carrito.show');
Route::post('/', [CarritoController::class, 'agregarAlCarrito'])->name('carrito.agregar');