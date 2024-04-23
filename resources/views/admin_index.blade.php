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
</li>

<li>2-Modificar Películas: en el caso de que a la hora de añadir una nueva película cometamos algun error o alguna de las películas añadidas tengan alguna dato erroneo
    dispones de un enlace que te redirige al apartado de modificación de películas desde el cual puedes modificar los datos necesarios.
</li>


<li>3-Eliminar Películas: en el caso de querer eliminar una película o que sea necesario que esta sea retirada de la cartelera, dispones de un enlace directo
    a una página desde la cual puedes eliminar las películas necesarias
</li>

</ul>


</div>
@endsection