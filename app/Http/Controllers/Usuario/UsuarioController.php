<?php

namespace App\Http\Controllers\Usuario;

use App\Http\Controllers\Controller;
use App\Livro;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsuarioController extends Controller
{
    public function inicio(Request $request)
    {
        $livros = Livro::query()
        ->orderBy('title')
        ->get();
        $usuarios = DB::table('livros')
        ->join('users', function ($join) {
            $join->on('users.id', '=', 'livros.user_id')
                 ->where('livros.user_id', '>', 0);
        })
        ->select('users.name')
        ->get();
        return view('Usuarios.inicio', compact('livros', 'usuarios'));
    }

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
        return redirect()->route('inicio_admin');
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

        return redirect()->route('inicio_admin');
    }
}
