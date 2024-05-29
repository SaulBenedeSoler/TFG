@extends('master')

@section('content')

  <div id="carouselExample" class="carousel slide mb-5">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="imagenes/Carrousel/gooniescarrou.jpg" class="d-block w-50 ftoc">
      </div>
      <div class="carousel-item">
        <img src="imagenes/Carrousel/cars.jpg" class="d-block w-50 ftoc">
      </div>
      <div class="carousel-item">
        <img src="imagenes/Carrousel/viven.jpg" class="d-block w-50 ftoc">
      </div>
      <div class="carousel-item">
        <img src="imagenes/Carrousel/spider-manCarrou.jpg" class="d-block w-50 ftoc">
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="anc">Anterior</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sic">Siguiente</span>
    </button>
  </div>

  <!--SECCION DE ENLACES--->
  <section class="card-c d-flex flex-column flex-md-row justify-content-around">
    <div class="card mb-3 mb-md-0" style="width: 18rem;">
      <div class="card-body d-flex flex-column justify-content-center align-items-center">
        <h5 class="card-title">Promociones</h5>
        <img src="imagenes/promociones/prom.png" class="img-fluid mb-2">
        <p>Para acceder al apartado de promociones simplemente debes pulsar sobre el botón.</p>
        <a href="{{ route('promociones.show') }}" class="btn btn-warning">Ver promociones</a>
      </div>
    </div>
  

    
    <div class="card" style="width: 18rem;">
      <div class="card-body d-flex flex-column justify-content-center align-items-center">
        <h5 class="card-title">Menús</h5>
        <img src="imagenes/Menus/SoloPalomitas.png" class="img-fluid mb-2">
        <p>Para acceder al apartado de packs de comida simplemente debes pulsar sobre el botón.</p>
        <a href="{{ route('comida.index') }}" class="btn btn-warning">Ver menús</a>
      </div>
    </div>
  </section>

  <!--SECCION DE COMENTARIOS-->
  <section class="testimonial-section mt-5">
    <h2 class="section-title">¿Qué dicen nuestros clientes?</h2>

      <div class="cont">      
        <div class="row justify-content-center">
        <div class="col-md-6 mb-4">
          <blockquote class="blockquote">
            <p class="mb-0">"Me encantó la experiencia de ver películas en Cine Temporal. La calidad de la imagen y el sonido es impresionante."</p>
            <P class="blockquote-footer mt-2">Alberto Coloquial</P>
          </blockquote>
        </div>

        <div class="col-md-6 mb-4">
          <blockquote class="blockquote">
            <p class="mb-0">"La variedad de películas es increíble. Hay algo para todos los gustos."</p>
            <P class="blockquote-footer mt-2">Gonzalo Buenaventura</P>
          </blockquote>
        </div>

        <div class="col-md-6 mb-4">
          <blockquote class="blockquote">
            <p class="mb-0">"Una gran idea para acercar a los más jóvenes al cine. Mi familia y yo hemos disfrutado mucho de la primera semana y estamos esperando con ganas la segunda."</p>
            <P class="blockquote-footer mt-2">Benito Alquitran</P>
          </blockquote>
        </div>

        <div class="col-md-6 mb-4">
          <blockquote class="blockquote">
            <p class="mb-0">"Una gran experiencia poder ver películas de mi infancia en el cine de nuevo"</p>
            <P class="blockquote-footer mt-2">Ben Losado</P>
          </blockquote>
        </div>
      </div>
    </div>
  </section>

@endsection