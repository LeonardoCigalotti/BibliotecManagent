<?php

namespace App\Http\Controllers\Livros;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Livro;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class LivrosController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function inicio(Request $request)
    {
        $livros = DB::table('livros')
            ->select('livros.*', 'reservas.reserva', 'users.name')
            ->leftJoin('reservas', 'reservas.livro_id', '=', 'livros.id')
            ->leftJoin('users', 'users.id', '=', 'livros.user_id')
            ->orderBy('title')
            ->get();

        $mensagem = $request->session()->get('mensagem');

        return view('Livros.indexAdmin', compact('livros', 'mensagem'));
    }

    public function meusLivros(Request $request)
    {
        $livros = DB::table('livros')
            ->select('livros.*', 'reservas.reservaDias')
            ->where('livros.user_id', '=', Auth::user()->id)
            ->leftjoin('reservas', 'reservas.livro_id', '=', 'livros.id')
            ->orderBy('title')
            ->get();

        $mensagem = $request->session()->get('mensagem');
        return view('livros.meuslivros', compact('livros', 'mensagem'));
    }


    public function create(){
        return view ('livros.criar');
    }

    public function enviar(Request $request){
        $livro = [
            $request->title,
            $request->descricao,
            $request->autor
        ];

        $usuario = Auth::user()->id;

        $livro = new Livro();

        $livro->title = $request->title;
        $livro->descricao = $request->descricao;
        $livro->autor = $request->autor;
        $livro->user_id = $usuario;
        $livro->save();

        if($livro->save() === true){

            $request->session()
                ->flash(
                    'mensagem', "Livro cadastrado com sucesso!"
                );
        } else {
            $request->session()
                ->flash(
                    'mensagem', "Erro, livro não foi cadastrado no banco de dados!"
                );
        }

        return redirect()->route('inicio_admin');
    }

    public function excluir(Request $request)
    {
        try {
            Livro::destroy($request->id);

            $request->session()
                ->flash('mensagem', "O livro foi excluído com sucesso!");

            return redirect()->route('livros_admin');

        } catch(\Exception $error){

            return redirect()
                ->back()
                ->withErrors('Este livro tem uma reserva e não pode ser excluído');
        }

    }

    public function editar(int $id)
    {
        $livro = Livro::find($id);

        return view('Livros.editar', ['livro' => $livro]);
    }

    public function update(Request $request)
    {
        Livro::find($request->id)
            ->update($request->all());

        return redirect()->route('livros_admin');
    }
}
