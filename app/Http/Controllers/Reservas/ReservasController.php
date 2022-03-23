<?php

namespace App\Http\Controllers\Reservas;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Livro;
use App\Reserva;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ReservasController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function inicio()
    {
        $reservas = DB::table('livros')
            ->select('livros.*','livros.id', 'reservas.reservaDias', 'users.name')
                ->where('reservas.user_id', '=', auth::user()->id)
                ->leftJoin('reservas', 'reservas.livro_id', '=', 'livros.id')
                ->leftJoin('users', 'users.id', '=', 'reservas.user_id')
                ->orderBy('title')
                ->get();

        return view('Reservas.minhasReservas', compact('reservas'));
    }

    public function reservar(int $id)
    {
        $livro = Livro::find($id);

        $comparar = Reserva::query()
        ->where('livro_id', '=', $id)
        ->get('livro_id');

        if(!empty ($comparar['0'])){
            return redirect()
                ->back()
                ->withErrors('Este livro já está reservado!');
        }
        else {
            return view('Reservas.reservar', ['livro' => $livro]);
        }
    }

    public function enviarReserva(Request $request){

        $usuario = Auth::user()->id;
        $livro = $request->id;

        $reserva = new Reserva();

        $reserva->reserva = 'true';
        $reserva->reservaDias = $request->reservaDias;
        $reserva->user_id = $usuario;
        $reserva->livro_id = $livro;
        $reserva->save();

        if($reserva->save() === true){
            $request->session()->flash(
                'mensagem', "Reservado com sucesso!"
            );
        } else {
            $request->session()->flash(
                'mensagem', "Erro, não pode ser Reservado!"
            );
        }

        return redirect()->route('inicio_admin');
    }

    public function editar(int $id)
    {
        $livro = Livro::find($id);

        return view('Reservas.editar', ['livro' => $livro]);
    }

    public function update(Request $request)
    {
        $dias = $request->reservaDias = $request->reservaDias;
        $id = $request->id = $request->id;

        DB::table('reservas')
            ->where('reservas.livro_id', '=', $id)
            ->increment('reservaDias', $dias);


        return redirect()->route('editar_reserva');
    }

    public function excluir(Request $request)
    {
        $id = $request->id = $request->id;

        DB::table('reservas')
            ->where('reservas.livro_id', '=', $id)
            ->delete();

        $request->session()
            ->flash('mensagem', "Reserva cancelada!");


        return redirect()->route('inicio_admin');
    }

}
