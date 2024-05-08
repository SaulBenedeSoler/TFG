@extends('master')


@section('content')

<div class="intro">


      
  <!--Código Temporal, revisar y en caso de implementarlo finalmente asignarle los estilos convenientes-->
    <div class="bienenida">
      <h1>Bienvenido a Cine Temporal</h1>
      <br>
      <p>En esta web vas a poder disfrutar de la emision de diferentes películas durante 4 semanas, las cuales tienen una temática que es el paso del tiempo.</p>
      <br>
      <p>Con este proyecto se busca la atracción de jóvenes al cine y mostrar la mejora del cine durante el paso del tiempo</p>
    </div>
    <!--Creo un h2 para informar de que trata la información y inserto un carrousel con diferentes imágenes sobre diferentes películas de cine--->
    <h2 class="h2Index">Peliculas más destacadas de cada semana</h2>
    <div id="carouselExample" class="carousel slide mb-5 carru">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="imagenes/Carrousel/gooniescarrou.jpg" class="carrouselimg d-block mx-auto img-fluid imgC">
        </div>
        <div class="carousel-item">
          <img src="imagenes/Carrousel/cars.jpg" class="carrouselimg d-block mx-auto img-fluid imgC">
        </div>
        <div class="carousel-item">
          <img src="imagenes/Carrousel/viven.jpg" class="d-block mx-auto img-fluid imagen">
        </div>
        <div class="carousel-item">
          <img src="imagenes/Carrousel/spider-manCarrou.jpg" class="carrouselimg d-block mx-auto img-fluid imgC">
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="text-dark">Anterior</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="text-dark">Siguiente</span>
      </button>
    </div>
  





    <!--Card que lleva al apartado de peliculas FALTA POR IMPLEMENTAR ESTILOS Y MODIFICAR--->
      <h2 class="h2Index">Películas</h2>  

      <div class="mx-auto" style="max-width: 400px;">
        <div class="card">
            <div class="card-body">
                <img src="/imagenes/Inicio.jpg" class="card-img-top FotoComida">
                <h5 class="card-title">Visita nuestro apartado de semanas y elige que películas deseas ver</h5>
                <button class="boton"><a href="{{ route('comida.index') }}" class="enlace">Ver películas</a></button>
            </div>
        </div>
    </div>
    <!--Card que lleva al apartado de promociones FALTA POR IMPLEMENTAR ESTILOS Y MODIFICAR--->
    <h2 class="h2Index">Promociones</h2>

        <div class="col-lg-4 col-md-6 mb-4">
          <div class="mx-auto" style="max-width: 400px;">
            <div class="card">
                <div class="card-body">
                    <img src="/imagenes/Inicio.jpg" class="card-img-top FotoComida">
                    <h5 class="card-title">Visita nuestra carta de menus para disfrutar de nuestras películas.</h5>
                    <button class="boton"><a href="{{ route('comida.index') }}" class="enlace">Ver menús</a></button>
                </div>
            </div>
        </div>
    </body>
@endsection