@extends('master')

@section('content')



  <h2 class="section-title">Peliculas más destacadas de cada semana</h2>
  <div id="carouselExample" class="carousel slide mb-5">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="imagenes/Carrousel/gooniescarrou.jpg" class="d-block w-100">
      </div>
      <div class="carousel-item">
        <img src="imagenes/Carrousel/cars.jpg" class="d-block w-100">
      </div>
      <div class="carousel-item">
        <img src="imagenes/Carrousel/viven.jpg" class="d-block w-100">
      </div>
      <div class="carousel-item">
        <img src="imagenes/Carrousel/spider-manCarrou.jpg" class="d-block w-100">
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

  <!--SECCION DE ENLACES--->
  <div class="row">
    <div class="col-md-4">
      <div class="card">
        <img src="/imagenes/Inicio.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Películas</h5>
          <p>Visita nuestro apartado de semanas y elige que películas deseas ver</p>
          <a href="{{ route('comida.index') }}" class="btn btn-primary">Ver películas</a>
        </div>
      </div>
    </div>

    <div class="col-md-4">
      <div class="card">
        <img src="/imagenes/Promociones.png" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Promociones</h5>
          <p>Visita nuestra carta de menus para disfrutar de nuestras películas.</p>
          <a href="{{ route('comida.index') }}" class="btn btn-primary">Ver menús</a>
        </div>
      </div>
    </div>

    <div class="col-md-4">
      <div class="card">
        <img src="/imagenes/Menus/menu.png" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Promociones</h5>
          <p>Visita nuestra carta de menus para disfrutar de nuestras películas.</p>
          <a href="{{ route('comida.index') }}" class="btn btn-primary">Ver menús</a>
        </div>
      </div>
    </div>



<!--SECCION  DE COMENTARIOS-->
  <h2 class="section-title">¿Qué dicen nuestros clientes?</h2>

  <div class="row">
    <div class="col-md-4">
      <div class="opiniones">
        <p>"Me encantó la experiencia de ver películas en Cine Temporal. La calidad de la imagen y el sonido es impresionante."</p>
        <p class="autor"> Alberto Coloquial</p>
      </div>
    </div>

    <div class="col-md-4">
      <div class="opiniones">
        <p>"La variedad de películas es increíble. Hay algo para todos los gustos."</p>
        <p class="autor"> Gonzalo Buenaventura</p>
      </div>
    </div>
  </div>

  <div class="col-md-4">
    <div class="opiniones">
      <p>"Una gran idea para acercar a los más jovenes al cine mi familia y yo hemos disfrutado mucho de la primera semana y estamos esperando con ganas la segunda."</p>
      <p class="autor"> Benito Alquitran</p>
    </div>
  </div>

  <div class="col-md-4">
    <div class="opiniones">
      <p>"Una gran experiencia poder ver películas de mi infancia en el cine de nuevo"</p>
      <p class="autor"> Ben Losado</p>
    </div>
  </div>
@endsection