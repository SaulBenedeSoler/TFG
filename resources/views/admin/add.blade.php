@extends('master')

@section('content')
    <div class="container">
        <h1>Añadir Usuario</h1>

        <form method="POST" action="{{ route('admin.store') }}">
            @csrf
            <div class="mb-3">
                <label class="form-label">Nombre: </label>
                <input type="text" name="name" class="form-control" required>
            </div>
            <div class="mb-3">
                <label class="form-label">email</label>
                <input type="email" name="email" class="form-control" required>
            </div>
            <div class="mb-3">
                <label class="form-label">usertype</label>
                <input type="text" name="usertype" class="form-control" required>
            </div>
            <div class="mb-3">
                <label class="form-label">password</label>
                <input type="password" name="password" class="form-control" required>
            </div>

            <button type="submit" class="btn btn-warning">Añadir usuario</button>
        </form>
    </div>
@endsection

