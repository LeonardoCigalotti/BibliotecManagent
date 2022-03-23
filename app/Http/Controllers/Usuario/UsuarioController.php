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
            ->select('livros.title','livros.id', 'livros.autor','livros.descricao', 'reservas.reserva', 'users.name')
            ->leftJoin('reservas', 'reservas.livro_id', '=', 'livros.id')
            ->leftJoin('users', 'users.id', '=', 'livros.user_id')
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
            return redirect()
                ->back()
                ->withErrors('Usuario ou senha incorreta');
        }
        return redirect()->route('inicio_admin');
    }

    public function registrar()
    {
        return view('Usuarios.registrar');
    }

    public function novoRegistro(Request $request)
    {
        try {
            $data = $request->except('_token');
            $data['password'] = Hash::make($data['password']);
            $user = User::create($data);
            Auth::login($user);

            return redirect()->route('inicio_admin');
            
        } catch(\Exception $error){
            return redirect()
                ->back()
                ->withErrors('Email já cadastrado!');
        }

    }

    public function perfil()
    {
        $usuario = DB::table('users')
            ->select('users.*')
            ->where('users.id', '=', Auth::user()->id)
            ->get();

        return view('Usuarios.perfil', compact('usuario'));
    }

    public function editarperfil()
    {
        $usuario = User::find(Auth::user()->id);

        return view('Usuarios.editarperfil', ['usuario' => $usuario]);
    }

    public function update(Request $request)
    {

        $id = $request->id;
        $nome = $request->name;
        $email = $request->email;

        $comparar = User::query()
            ->select('users.email')
            ->where('users.email', '=', $email)
            ->where('users.id', '=', $id)
            ->get();

        $comparar2 = User::query()
            ->select('users.email')
            ->where('users.email', '=', $email)
            ->get();

        if(!empty ($comparar[0])){

            DB::table('users')
            ->where('users.id', '=', $id)
            ->update(['users.name' => $nome]);

            return redirect()->route('inicio_admin');

        } else {

            if(!empty ($comparar2[0])){

                return redirect()
                    ->back()
                    ->withErrors('Email já cadastrado!');

            } else {

                DB::table('users')
                    ->where('users.id', '=', $id)
                    ->update(['users.name' => $nome], ['users.email' => $email]);

                return redirect()->route('inicio_admin');
            }
        }
    }

}
