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

}
