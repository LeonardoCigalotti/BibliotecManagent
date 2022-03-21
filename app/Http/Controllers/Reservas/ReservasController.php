<?php

namespace App\Http\Controllers\Reservas;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Livro;
use App\User;

class ReservasController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    
}
