<?php

namespace App\Http\Controllers;
use App\Models\Movie;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    /*FUNCION PARA EL USUARIO EL CUAL SE ENCARGA DE RECOGER TODAS LAS PELICULAS DE LA BASE DE DATOS*/
    public function index(){
        $MovieList = Movie::all();
        return view('index', ['MovieList' => $MovieList]);
    }

    /*FUNCION PARA EL USUARIOS EL CUAL SE ENCARGA DE MOSTRAR TODAS LAS PELICULAS Y DEVOLVER LA VISTA SHOW*/
    public function show(){
        $movie = Movie::all();
        return view('Movies.show', ['movie' => $movie]);
    }

    /*FUNCION DE MOSTRAR AL USUARIO PELICULAS SEPARADAS Y ORDENADAS DEPENDIENDO DEL ID DE LA PELICULA*/
    public function mostrar($semana_id){
        $movie = Movie::where('semana_id', $semana_id)->get();
        return view('Movies.mostrar', ['movies' => $movie, 'semana_id' => $semana_id]);
    }

    /*FUNCION PARA EL USUARIO LA CUAL SE ENCARGA DE MOSTRAR TODOS LOS DATOS DE LA PELICULA OBTENIENDOLAS POR ID*/
    public function infoPeli($id){
        $movie = Movie::findOrFail($id);
        return view('Movies.mostrar', ['movie' => $movie]);

    }

    /*FUNCIONES ADMINISTADOR*/

    /*FUNCION PARA EL ADMINISTADOR EN LA CUAL RECOGE TODA LA INFORMACION DE LAS PELICULAS*/
    public function ndex(){
        $MovieList = Movie::all();
        return view('admin_index', ['MovieList' => $MovieList]);
    }

    /*FUNCION PARA EL ADMINISTADOR EN LA CUAL RECOGE TODAS LAS PELICULAS ALMACENADAS EN LA BASE DE DATOS Y MUESTRA LA VISTA SHOW*/
    public function showAdmin(){
        $movie = Movie::all();
        return view('Movies.showAdmin', ['movie' => $movie]);
    }

    /*FUNCION PARA EL ADMINISTRADOR EL CUAL SE USA PARA CREAR PELICULAS Y DEVUELVE LA VISTA CREAR*/
    public function create(){
        return view('movies.crear');
    }

    /*FUNCION LA CUAL SIRVE PARA EL FORMULARIO PARA AÑADIR O MODIFICAR LAS PELICULAS Y QUE PIDE COMO OBLIGATORIO LOS DATOS QUE SE ENCUENTRAN GUARDADOS
    EN LA BASE DE DATOS Y CREA UN NUEVO OBJETO MOVIE MEDIANTE LA VARIABLE MOVIE Y VALIDA LOS DATOS MEDIANTE LA VARIABLE validateData, LUEGO SE
    ENCARGA DE GUARDAS LA VARIABLE Y NOS REDIRIGE A LA VISTA DE MOVIES DEL ADMINISTRADOR Y COGE LOS MENUS MEDIANTE LA ID*/
    public function store(Request $request){
        $validatedData = $request->validate([
            'title' => 'required',
            'descripcion' => 'required',
            'genero' => 'required',
            'duracion' => 'required', 
            'imagen' => 'required',
            'trailer' => 'required',
            'director_id' => 'required',
            'actor_id' => 'required',
            'semana_id' => 'required'
        ]);
    
        $movie = new Movie();
        $movie->title = $validatedData['title'];
        $movie->descripcion = $validatedData['descripcion'];
        $movie->genero = $validatedData['genero'];
        $movie->duracion = $validatedData['duracion'];    
        $movie->imagen = $validatedData['imagen'];
        $movie->director_id = $validatedData['director_id'];
        $movie->actor_id = $validatedData['actor_id'];
        $movie->imagen = $validatedData['imagen'];
        $movie->semana_id = $validatedData['semana_id']; 
        $movie->trailer = $validatedData['trailer'];
        $movie->fecha_lanzamiento = now(); 

        $movie->save();
        
        return redirect()->route('admin.index', ['id' => $movie->id]);
    }
    
    /*FUNCION PARA EL ADMINISTRADOR LA CUAL SIRVE PARA EDITAR LAS PELICULAS Y REDIRIGE AL FORMULARIO, ADEMAS DE BUSCAR LAS PELICULAS POR ID*/
    public function edit($id){
        $movie = Movie::find($id);
        return view('movies.form', ['movie' => $movie]);
    }

    /*FUNCION LA CUAL SIRVE PARA ACTUALIZAR LA TABLA MOVIE Y SE ENCARGA DE BUSCAR MEDIANTE LA ID TODOS LOS DATOS DE LA TABLA DE MOVIE, GUARDARLOS Y MOSTRARLOS Y 
    REIRIGE AL INDEX DEL AMDINISTRADOR*/
    public function update($id, Request $request){
        $movie = Movie::find($id);
        $movie->title = $request->title;
        $movie->imagen = $request->imagen;
        $movie->descripcion = $request->descripcion;
        $movie->genero = $request->genero;
        $movie->duracion = $request->duracion;
        $movie->fecha_lanzamiento = $request->fecha_lanzamiento;
        $movie->save();
        return redirect()->route('Movies.showAdmin');
    }
    

    /*FUNCION LA CUAL SIRVE PARA ELIMINAR MOVIES Y SE ENCARGA DE BUSCAR MEDIANTE EL ID EL MENU QUE QUEREMOS ELIMINAR*/
    public function destroy($id){
        $movie = Movie::find($id);
    
        if ($movie) {
            $movie->delete();
            return redirect()->route('admin.moviesShow');
        } else {

            return redirect()->back()->withErrors(['error' => 'La película no se encontró']);
        }

}
}
