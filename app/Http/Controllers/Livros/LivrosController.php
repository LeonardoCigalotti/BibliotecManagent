<?php

namespace App\Http\Controllers\Livros;

use App\Http\Controllers\Controller;

class LivrosController extends Controller
{
    public function create(){
        return view ('livros.create');
    }

    public function post(){
        
    }
}
