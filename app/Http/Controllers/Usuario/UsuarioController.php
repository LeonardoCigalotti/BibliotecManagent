<?php

namespace App\Http\Controllers\Usuario;

use App\Http\Controllers\Controller;
use App\Livro;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UsuarioController extends Controller
{
    public function login()
    {
        return view('Usuarios.login');
    }

    public function entrar(Request $request)
    {
        if(!Auth::attempt($request->only(['email', 'password'])))
        {
            return redirect()->back()->withErrors('Usuario ou senha incorreta');
        }
        return redirect()->route('');
    }

    public function inicio(Request $request)
    {
        $livros = Livro::query()
        ->orderBy('title')
        ->get();
        return view('index', compact('livros'));
    }
}
