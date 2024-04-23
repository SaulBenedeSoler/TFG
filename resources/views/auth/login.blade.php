@extends('master')

@section('content')

@section('title', 'Iniciar Sesion')

<!-- Session Status -->
<x-auth-session-status class="mb-4" :status="session('status')" />

<div style="margin-top: 500px; margin-bottom: 500px;">
    <div class="LoginCentrado text-center" style="padding: 20px;">
        <form method="POST" action="{{ route('login') }}" class="formularioLogin mx-auto bg-danger">
            @csrf

            <div class="TituloLogin">
                <h2>Login</h2>
            </div>

            <!-- Email Address -->
            <div class="email" style="margin-bottom: 20px;">
                <x-input-label for="email" :value="__('Correo')" />
                <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>

            <!-- Password -->
            <div class="mt-4 contraseña" style="margin-bottom: 20px;">
                <x-input-label for="password" :value="__('Contraseña')" />
                <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />
                <x-input-error :messages="$errors->get('password')" class="mt-2" />
            </div>

            <div class="flex items-center justify-end mt-4 olvidado" style="margin-bottom: 20px;">
                @if (Route::has('password.request'))
                    <a class="olvidado" href="{{ route('password.request') }}">
                        {{ __('¿Olvidaste tu contraseña?') }}
                    </a>
                @endif
            </div>

            <div class="Login">
                <x-primary-button class="ml-3 login">
                    {{ __('Log in') }}
                </x-primary-button>
            </div>
        </form>
    </div>
</div>

@endsection
