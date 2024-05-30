@extends('master')

@section('content')

@section('title', 'Iniciar Sesion')



<!-- Session Status -->
<div class="centrado">
<x-auth-session-status class="mb-4" :status="session('status')" />

<div class="resetear">

    <form method="POST" action="{{ route('password.email') }}" class="bg-danger text-aling-center justify-content-center resetear">
        @csrf

        <!-- Email Address -->
        <div class="infoRes">
            <h5 class="text-white">Correo Electrónico</h2>
        </div>
        <div class="INFORES">
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <div class="mt-4 botonRes">
            <x-primary-button class="bg bg-warning text-white ">
                {{ __('Enviar correo de reestablecimiento') }}
            </x-primary-button>
        </div>
     
    </form>
    
</div>
</div>
@endsection