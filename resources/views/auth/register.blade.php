@extends('master')


@section('content')

@section('title', 'Registrarse')

<div style="margin-top: 500px; margin-bottom: 500px;">
    <div class="LoginCentrado text-center" style="padding: 20px;">
    <form method="POST" action="{{ route('register') }}" class="register bg-danger">
        @csrf

        <div class="text-white TextoRegister">
            <h2>Registro</h2>
        </div>

        <!-- Name -->
        <div>
            <x-input-label for="name" :value="__('Nombre')"  class="text-white" />
            <x-text-input id="name" class="block mt-1 w-50" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')"  class="text-white" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Contraseña')"  class="text-white"/>

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirmar contraseña')"  class="text-white"/>

            <x-text-input id="password_confirmation" class="block mt-1 w-full"
                            type="password"
                            name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 text-decoration-none text-white" href="{{ route('login') }}">
                {{ __('¿Ya estas registrado?') }}
            </a>
            <br>
            <br>
            <x-primary-button class="ml-4 bg-warning">
                {{ __('Registrarse') }}
            </x-primary-button>
        </div>
    </form>
    </div>
    </div>
@endsection
