@extends('master')

@section('content')
<div class="intro">
<h1 class="tituloAdmin">Panel de administrador</h1>
<br>
<p>En este panel tienes diferentes funciones las cuales sirven para realizar diferentes operaciones:</p>
<br>

<ul>

<li>1-Añadir Películas: en el caso de querer añadir películas o necesitar añadir alguna nueva película a la cartelera dispones de un enlace directo a la web
    el cual se encuentra en el header y que dentro contiene la información necesaria para añadir una nueva película</li>
<li>1-Acciones Películas: este apartado te redirige a una vista en la cual te muestra todas las promociones en una tabla y te da las opciones de 
    modificar, eliminar o añadir.</li>
</li>

<li>2-Modificar Películas: en el caso de que a la hora de añadir una nueva película cometamos algun error o alguna de las películas añadidas tengan alguna dato erroneo
    dispones de un enlace que te redirige al apartado de modificación de películas desde el cual puedes modificar los datos necesarios.
</li>
<li>2-Acciones Usuarios:este apartado te redirige a una vista en la cual te muestra todas las promociones en una tabla y te da las opciones de 
    eliminar o añadir.</li>


<li>3-Eliminar Películas: en el caso de querer eliminar una película o que sea necesario que esta sea retirada de la cartelera, dispones de un enlace directo
    a una página desde la cual puedes eliminar las películas necesarias
</li>
<li>3-Acciones Menu: este apartado te redirige a una vista en la cual te muestra todas las promociones en una tabla y te da las opciones de 
    modificar, eliminar o añadir.</li>

<li>Acciones Promociones: este apartado te redirige a una vista en la cual te muestra todas las promociones en una tabla y te da las opciones de 
    modificar, eliminar o añadir.
</li>
</ul>
@endsection