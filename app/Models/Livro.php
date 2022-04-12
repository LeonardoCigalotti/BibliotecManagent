<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Livro extends Model
{
    public $timestamps = false;
    protected $fillable = ['title', 'descricao', 'autor', 'user_id', 'reserva_id'];

    public function users()
    {
        return $this->belongsTo(User::class, 'id', 'name');
    }

    public function reserva()
    {
        return $this->belongsTo(Reserva::class);
    }
}
