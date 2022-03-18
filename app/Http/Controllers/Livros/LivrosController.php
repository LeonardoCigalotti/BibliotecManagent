<?php

namespace App\Http\Controllers\Livros;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Livro;

class LivrosController extends Controller
{
    public function inicio(Request $request)
    {
        $livros = Livro::query()
        ->orderBy('title')
        ->get();
        $mensagem = $request->session()->get('mensagem');
        return view('livros.index', compact('livros', 'mensagem'));
    }



    public function create(){
        return view ('livros.create');
    }

    public function enviar(Request $request){
        $livro = [
            $request->title,
            $request->descricao,
            $request->autor
        ];
        $livro = new Livro();
        $livro->title = $request->title;
        $livro->descricao = $request->descricao;
        $livro->autor = $request->autor;
        $livro->save();

        if($livro->save() === true){
            $request->session()->flash(
                'mensagem', "Livro cadastrado com sucesso!"
            );
        } else {
            $request->session()->flash(
                'mensagem', "Erro, livro não foi cadastrado no banco de dados!"
            );
        }

        return redirect()->route('inicio_admin');
    }
}
