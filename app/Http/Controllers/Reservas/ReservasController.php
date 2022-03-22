<?php

namespace App\Http\Controllers\Reservas;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Livro;
use App\Reserva;
use App\User;
use Illuminate\Support\Facades\Auth;

class ReservasController extends Controller
{


    public function inicio()
    {
        return view('Reservas.minhasReservas');
    }

    public function reservar(int $id)
    {
        $livro = Livro::find($id);

        return view('Reservas.reservar', ['livro' => $livro]);
    }

    public function enviarReserva(Request $request){

        $usuario = Auth::user()->id;
        $livro = $request->id;

        $reserva = new Reserva();

        $reserva->semana = $request->semana;
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

}
