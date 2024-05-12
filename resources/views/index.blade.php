@extends('master')

@section('content')

  <h2 class="section-title">Peliculas más destacadas de cada semana</h2>
  <div id="carouselExample" class="carousel slide mb-5">
    <div class="carousel-inner">
      <div class="carousel-item active ce">
        <img src="imagenes/Carrousel/gooniescarrou.jpg" class="d-block ftoc">
      </div>
      <div class="carousel-item">
        <img src="imagenes/Carrousel/cars.jpg" class="d-block ftoc">
      </div>
      <div class="carousel-item">
        <img src="imagenes/Carrousel/viven.jpg" class="d-block ftoc">
      </div>
      <div class="carousel-item">
        <img src="imagenes/Carrousel/spider-manCarrou.jpg" class="d-block ftoc">
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
  <section class="card-c">
    <div class="card" style="height: 100%;">
      <div class="card-body d-flex flex-column justify-content-center align-items-center">
        <img src="/imagenes/Promociones.png" class="card-img-top img-fluid" alt="Promociones">
        <h5 class="card-title">Promociones</h5>
        <a href="{{ route('promociones.show') }}" class="btn btn-warning">Ver promociones</a>
      </div>
    </div>
  
    <div class="card" style="height: 100%;">
      <div class="card-body d-flex flex-column justify-content-center align-items-center">
        <img src="/imagenes/Menus/menu.png" class="card-img-top img-fluid" alt="Menús">
        <h5 class="card-title">Menús</h5>
        <a href="{{ route('comida.index') }}" class="btn btn-warning">Ver menús</a>
      </div>
    </div>
  </section>
  


<!--SECCION  DE COMENTARIOS-->
<section class="testimonial-section">
  <h2 class="section-title">¿Qué dicen nuestros clientes?</h2>


  <div class="container text-center">
    <div class="row justify-content-center">
      <div class="col-md-6">
        <blockquote>
          <p>"Me encantó la experiencia de ver películas en Cine Temporal. La calidad de la imagen y el sonido es impresionante."</p>
          <p class="autor">Alberto Coloquial</p>
        </blockquote>
      </div>

      <div class="col-md-6">
        <blockquote>
          <p>"La variedad de películas es increíble. Hay algo para todos los gustos."</p>
          <p class="autor">Gonzalo Buenaventura</p>
        </blockquote>
      </div>

      <div class="col-md-6">
        <blockquote>
          <p>"Una gran idea para acercar a los más jóvenes al cine. Mi familia y yo hemos disfrutado mucho de la primera semana y estamos esperando con ganas la segunda."</p>
          <p class="autor">Benito Alquitran</p>
        </blockquote>
      </div>

      <div class="col-md-6">
        <blockquote>
          <p>"Una gran experiencia poder ver películas de mi infancia en el cine de nuevo"</p>
          <p class="autor">Ben Losado</p>
        </blockquote>
      </div>
    </div>
  </div>
</section>

@endsection