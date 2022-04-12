<?php

namespace App\Models;

<<<<<<< HEAD
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
=======
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
>>>>>>> b9465da18a749f9912d6769c811145f40955fb33

class User extends Authenticatable
{
    use Notifiable;

   /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function livros()
    {
        return $this->hasMany(Livro::class);
    }

    public function reserva()
    {
        return $this->hasMany(Reserva::class);
    }
}
<<<<<<< HEAD
=======

>>>>>>> b9465da18a749f9912d6769c811145f40955fb33
