<html>
    <head>
       <title>@yield('title')</title>
       <link type="text/css" rel="stylesheet" href="{{asset('css/estilos.css')}}">
       <link rel="shortcut icon" type="image/png" href="{{url('imagenes/Logos/Icon.png')}}">
       <link rel="stylesheet" href="bootstrap/bootstrap.min.css">
       
    </head>
    <body>
      @if(Auth::check() && Auth::user()->usertype == 'admin')
      @include('header/admin_header')
    @else
      @include('header/header')
   @endif

        <section>
          
        <main class="main">
           <div class="content">
           @yield('content')
        </div>
        </main>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        

        </section>
       @include('footer/footer')
       <script src="bootstrap/bootstrap.bundle.min.js"></script>
      </body>
</html>