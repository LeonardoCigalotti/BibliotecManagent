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
        $livros = DB::table('livros')
        ->leftJoin('reservas', 'reservas.livro_id', '=', 'livros.id')
        ->select('livros.title','livros.id', 'livros.autor','livros.descricao', 'reservas.semana')
        ->orderBy('title')
        ->get();
        return view('Usuarios.inicio', compact('livros'));
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

    public function perfil()
    {
        $usuarios = User::query()
        ->where('id', '=', Auth::user()->id)
        ->get();

        return view('Usuarios.perfil', compact('usuarios'));
    }
    public function editar(Request $request){

        User::find($request->id)
        ->update($request->name)
        ->where('id', '=', auth::user()->id);

        return redirect()->route('inicio_admin');
    }
}
