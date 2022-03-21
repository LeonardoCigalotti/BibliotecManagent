<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Livro extends Model
{
    public $timestamps = false;
    protected $fillable = ['title', 'descricao', 'autor', 'user_id', 'reserva_id'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function reserva()
    {
        return $this->belongsTo(Reserva::class);
    }
}
