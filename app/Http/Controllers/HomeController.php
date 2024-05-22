<?php
namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    /*Se encarga mediante la comprobacion de los ifs de comprobar que tipo de usuario es el que esta iniciando sesión
    y de esta manera puede redirigir al usuario a un index u otro*/
    public function index(){
        if (Auth::check()) {
            if (auth()->user()->usertype === 'admin') {
                return view('admin_index');
            } else {
                return view('index');
            }
        } else {
            return redirect()->route('login');
        }
    }

    /*FUNCIONES DE ADMINISTRADOR*/

    /*Se encarga de comprobar que el usuario es administrador gracias al if y en caso de serlo se encarga de mostrar
    todos los usuarios almacenados en la base de datos*/
    public function showUsuarios(){
        if(auth()->user()->usertype === 'admin'){

            $usuarios = User::all();
            return view('admin.showUsuarios', ['usuarios'=> $usuarios]);
        }
    }

    /*Se encarga de permitir crear nuevos usuarios*/
    public function create(){
        return view('admin.add');
    }

    /*Se necarga de actualizar los datos de los usuarios validarlos*/
    public function store(Request $request){
        $validatedData = $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
            'usertype' => 'required', 
        ]);
    
       /*Creo un objeto usuario y le digo que cree un objeto nuevo en la base*/
        $usuario = new User();
        /*Le indico al objeto lo que quiero añadir y le digo que debe de validarlo con la información de arriba*/
        $usuario->name = $validatedData['name'];
        /*Le indico al objeto lo que quiero añadir y le digo que debe de validarlo con la información de arriba*/
        $usuario->email = $validatedData['email'];
        /*Le indico al objeto lo que quiero añadir y le digo que debe de validarlo con la información de arriba*/
        $usuario->password = $validatedData['password'];
        /*Le indico al objeto lo que quiero añadir y le digo que debe de validarlo con la información de arriba*/
        $usuario->usertype = $validatedData['usertype'];
        /*Le indico al objeto lo que quiero añadir y le digo que debe de validarlo con la información de arriba*/
    
        /*Indico que se guarde*/
        $usuario->save();

        return redirect()->route('usuarios.mostrar', ['id' => $usuario->id]);
    }

    /*Se encarga de permitir editar los usuarios que se encuentran en la base de datos*/
    public function adedit($id){
        $usuario = User::find($id);
        return view('admin.info', ['user' => $usuario]);
    }
    
    /*Relaiza la busqueda de todos los usuarios por id y permite atualizarlos*/
    public function adupdate($id, Request $request){
        $usuario = User::find($id);
        $usuario->name = $request->name;
        $usuario->email = $request->email;
        $usuario->password = $request->password;
        $usuario->usertype = $request->usertype;
        $usuario->save();
        return redirect()->route('admin.index');
    }

    /*Se encarga de buscar los usurios por id y de eliminarlos*/
    public function adborrar($id){
        $usuario = User::find($id);
        $usuario->delete();
        return redirect()->route('admin.index');
    }
    }

