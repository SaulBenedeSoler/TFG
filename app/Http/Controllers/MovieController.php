<?php

namespace App\Http\Controllers;
use App\Models\Movie;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    /*Se encarga de realizar mediante la variable MovieList la llamada a la tabla Movie de la base de datos y 
    obtener todos los datos que esta contiene para mostrarlos posteriormente*/
    public function index(){
        $MovieList = Movie::all();
        return view('index', ['MovieList' => $MovieList]);
    }

    /*Se encarga de realizar mediante la variable MovieList la llamada a la tabla Movie de la base de datos y 
    obtener todos los datos que esta contiene para mostrarlos posteriormente y mostrarlo en la vista show*/
    public function show(){
        $movie = Movie::all();
        return view('Movies.show', ['movie' => $movie]);
    }

    /*Se encargar de mediante el id de la semana buscar todas las peliculas
    en las cuales el id de la semana coincida con el seleccionado por el usurio
    y de esta manera mostrar solo las pelícuals que pertenezcan a esa semana*/
    public function mostrar($semana_id){
        $movie = Movie::where('semana_id', $semana_id)->get();
        return view('Movies.mostrar', ['movies' => $movie, 'semana_id' => $semana_id]);
    }

    /*Se encarga de mediante la llama al id de la pelicula buscar ese id y en caso de encontrarlo
    mostrar toda la información de la película*/
    public function infoPeli($id){
        $movie = Movie::findOrFail($id);
        return view('Movies.mostrar', ['movie' => $movie]);

    }

    /*FUNCIONES ADMINISTADOR*/

    /*Se encarga de en la parte de administrador buscar mediante MovieList todas las películas*/
    public function ndex(){
        $MovieList = Movie::all();
        return view('admin_index', ['MovieList' => $MovieList]);
    }

    /*Se encarga de en la parte de administrador buscar mediante MovieList todas las películas y mostrarlas en la vista showAdmin*/
    public function showAdmin(){
        $movie = Movie::all();
        return view('Movies.showAdmin', ['movie' => $movie]);
    }

    /*Se encarga de crear nuevas películas*/
    public function create(){
        return view('movies.crear');
    }

    /*Se encarga de mediante el recibir datos de un request validar todos los datos de la base de datos
    y de esta manera llamar al Movie de la base de datos y almacenar toda la informacion introducida en la variable movie,
    para posteriormente guardarla*/
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
    
    /*Se encarga de buscar mediante id la película  y dar asi lugar a poder editarla en la vista from*/
    public function edit($id){
        $movie = Movie::find($id);
        return view('movies.form', ['movie' => $movie]);
    }

    /*Se encarga de buscar mediante id la película seleccionada y de esta manera acceder a todos los datos actuales
    y guardar los cambios realizados y mostrarlos*/
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
    

    /*Se encarga de eliminar películas*/
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
