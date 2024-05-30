@extends('master')

@section('content')


<!--Creo un div que contiene una lista con instrucciones para el administrador-->
<div class="intro">
<h1 class="tituloAdmin">Panel de administrador</h1>
<br>


<ul>

<li><b>Películas: </b> este apartado es un desplegable el cual al pulsar sobre el nos muestra las diferentes acciones que puedes realizar en el apartado de peliculas. 
    <br>
    <b>Ver películas</b> el cual te permite ver todas las películas que estan almacenadas en la base de datos, modificar la película en caso de necesitar añadir, o cambiar información.
    <br>
    <b>Añadir película</b>  la cual te permite añadir una nueva película.
</li>

<br>

<li><b>Usuarios: </b> este apartado es un desplegable el cual al pulsar sobre el nos muestra las diferentes acciones que puedes realizar en el apartado de usuarios.
    <br>
    <b>Ver usuario</b> el cual te permite ver todas los usuarios que estan almacenadas en la base de datos.
    <br>
    <b>Añadir usuario</b>  la cual te permite añadir una nuevo usuario.
</li>

<br>

<li><b>Promociones: </b> este apartado es un desplegable el cual al pulsar sobre el nos muestra las diferentes acciones que puedes realizar en el apartado de promociones. 
    <br>
    <b>Ver promociones</b> el cual te permite ver todas las promociones que estan almacenadas en la base de datos, modificarlas en caso de ser necesarias o eliminarlas.
    <br>
    <b>Añadir promocion</b>  la cual te permite añadir una nueva promocion.
</li>

<br>

<li><b>Menus: </b> este apartado es un desplegable el cual al pulsar sobre el nos muestra las diferentes acciones que puedes realizar en el apartado de menus .
    <br>
    <b>Ver menus</b> el cual te permite ver todas los menus que estan almacenadas en la base de datos, modificarlos en caso de ser necesario o elimianrlos.
    <br>
    <b>Añadir menus</b>  la cual te permite añadir un nuevo menu.
</li>


</ul>
@endsection