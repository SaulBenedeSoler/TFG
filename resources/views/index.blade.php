@extends('master')


@section('content')

<div class="intro">

    <h2 class="h2Index">Peliculas más destacadas de cada semana</h2>

    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
      <div class="carousel-inner text-center">
        <div class="carousel-item">
          <img src="imagenes/Carrousel/gooniescarrou.jpg" class="carrouselimg">
        </div>
        <div class="carousel-item">
          <img src="imagenes/Carrousel/torrente.jpg" class="carrouselimg">
        </div>
        <div class="carousel-item ">
          <img src="imagenes/Carrousel/cars.jpg" class="carrouselimg">
        </div>
        <div class="carousel-item active">
          <img src="imagenes/Carrousel/spider-manCarrou.jpg" class="carrouselimg">
        </div>
  
        <a class="carousel-control-prev text-dark" href="#carouselExampleControls" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon bg-dark" aria-hidden="true"></span>
          <span class="sr-only">Anterior</span>
      </a>
      <a class="carousel-control-next text-dark" href="#carouselExampleControls" role="button" data-slide="next">
        <span class="sr-only">Siguiente</span>
        <span class="carousel-control-next-icon bg-dark" aria-hidden="true"></span>
      </a>
      
    </div>

    <div class="container main-content mt-4">
      <div class="mx-auto text-center w-100">
        <h2 class="h2Index">Menus</h2>  
        <div class="card">
          <div class="card-body">
            <img src="/imagenes/Menus/menu.png" class="card-img-top FotoComida">
            <h5 class="card-title">Visita nuestra carta de menus para disfrutar de nuestras películas.</h5>
            <button class="boton"><a href="{{ route('comida.index') }}" class="enlace">Ver menús</a></button>
          </div>
        </div>
      </div>
    </div>
    




    <div class="container main-content mt-4">
      <div class="mx-auto text-center w-100">
        <h2 class="h2Index">Promociones</h2>  
        <div class="card">
          <div class="card-body">
            <img src="/imagenes/Promociones.png" class="card-img-top FotoComida">
            <h5 class="card-title">Visita nuestra carta de promociones para disfrutar de nuestras ofertas.</h5>
            <button class="boton"><a href="{{ route('promociones.show') }}" class="enlace">Ver promociones</a></button>
          </div>
        </div>
      </div>
    </div>
      


    </body>
@endsection