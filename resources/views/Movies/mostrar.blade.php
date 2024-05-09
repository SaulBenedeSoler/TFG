@extends('master')

@section('content')
<div class="centrado">
<div class="container-fluid">
    <div class="row">
      @foreach($movies as $movie)
        <div class="col-md-3 mb-4">
          <a href="{{ route('movies.info', ['id' => $movie->id]) }}">
            <img src="{{ asset('imagenes/'. $movie->imagen) }}" class="img-fluid rounded-3">
          </a>
        </div>
      @endforeach
    </div>
  </div>
@endsection