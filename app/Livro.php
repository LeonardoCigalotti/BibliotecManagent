<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Livro extends Model
{
    public $timestamps = false;
    protected $fillable = ['title', 'descricao', 'autor'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
