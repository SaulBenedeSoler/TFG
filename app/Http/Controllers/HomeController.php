<?php
namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    /*FUNCION LA CUAL SE ENCARGA DE DIRIGIR AL INDEX DE USUARIO O AL INDEX DE ADMINSITRADOR REALIZANDO LA COMPROBACION MEDIANTE EL IF AUTH CHECK
    Y COMPROBANDO SI EL USERTYPE ES USUARIO O ADMINISTRADOR*/
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

    /*FUNCION ENCARGADA DE COMPROBAR SI ES ADMINISTRADOR Y EN CASO DE SERLO SELECCIONAR TODOS LOS USUARIOS DE LA BASE DE DATOS
    Y REDIRIGIR A LA VISTA DE SHOWUSUARIOS*/
    public function showUsuarios(){
        if(auth()->user()->usertype === 'admin'){

            $usuarios = User::all();
            return view('admin.showUsuarios', ['usuarios'=> $usuarios]);
        }
    }

    /*FUNCION QUE SE USA PARA CREAR USUARIOS NUEVOS Y QUE REDIRIGE A LA VISTA ADD DE AMDINISTRADOR*/
    public function create(){
        return view('admin.add');
    }

    /*FUNCION ENCARGADA DE ACTUALIZAR LOS FORMULARIOS Y QUE PIDE COMO REQUERIDO LOS DATOS DE LA TABLA DE USUARIOS, ADEMAS DE CREAR UN OBJETO USUARIO NUEVO
    Y COMPROBAR Y VALIDAR LSO DATOS*/
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

    /*FUNCION UTILIZADA POR EL ADMINISTRADOR EN LA CUAL SELECCIONAN LOS USUARIOS DE LA BASE DE DATOS MEDIANTE EL ID Y DEVUELVEN LA VISTA DE INFORMACION
    JUNTO CON LOS DATOS DE LOS USUARIOS*/
    public function adedit($id){
        $usuario = User::find($id);
        return view('admin.info', ['user' => $usuario]);
    }
    
    /*FUNCION ENCARGADA DE ACTUALIZAR LOS USUARIOS MEDIANTE LA BUSQUEDA DE ESTOS POR ID Y DEVUELVE LA VISTA INDEX DEL ADMINSITRADOR*/
    public function adupdate($id, Request $request){
        $usuario = User::find($id);
        $usuario->name = $request->name;
        $usuario->email = $request->email;
        $usuario->password = $request->password;
        $usuario->usertype = $request->usertype;
        $usuario->save();
        return redirect()->route('admin.index');
    }

    /*FUNCION USADA PARA BORRAR LOS USUARIOS BUSCADOS MEDIANTE EL ID*/
    public function adborrar($id){
        $usuario = User::find($id);
        $usuario->delete();
        return redirect()->route('admin.index');
    }
    }

