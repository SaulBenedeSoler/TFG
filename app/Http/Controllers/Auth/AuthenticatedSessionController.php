<?php

namespace App\Http\Controllers\Auth;


use App\Models\User;
use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class AuthenticatedSessionController extends Controller
{
    /**
     * Display the login view.
     */
    public function create(): View
    {
        return view('auth.login');
    }

    /**
     * Handle an incoming authentication request.
     */
    public function store(LoginRequest $request): RedirectResponse
    {
        $request->authenticate();

        $request->session()->regenerate();

        if($request->user()->usertype === 'admin'){
            return redirect()->route('admin.index');
        }

        return redirect()->intended();
    }

    public function administrarUsuarios()
{
    // Verificar si el usuario actual es un administrador
    if (auth()->user()->usertype === 'admin') {
        $usuarios = user::all();
        return view('admin.usuarios.administrar', ['usuarios' => $usuarios]);
    } else {
        // Redirigir al usuario a una página de error o a otra ubicación
        return redirect()->route('home')->with('error', 'No tienes permiso para acceder a esta página');
    }
    }

  


    /**
     * Destroy an authenticated session.
     */
    public function destroy(Request $request): RedirectResponse
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }

}
