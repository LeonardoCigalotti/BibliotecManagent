<?php

namespace App\Http\Controllers\Usuario;

use App\Http\Controllers\Controller;
use App\Livro;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

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
        return redirect()->route('#');
    }

    public function inicio(Request $request)
    {
        $livros = Livro::query()
        ->orderBy('title')
        ->get();
        return view('index', compact('livros'));
    }

    public function registrar()
    {
        return view('Usuarios.registrar');
    }

    public function novoRegistro(Request $request)
    {
        $data = $request->except('_token');
        $data['password'] = Hash::make($data['password']);
        $user = User::create($data);

        Auth::login($user);

        return redirect()->route('#');
    }
}
