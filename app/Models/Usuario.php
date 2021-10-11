<?php

namespace App\Models;


use Illuminate\Notifications\Notifiable;

class Usuario extends \Illuminate\Foundation\Auth\User
{
    use Notifiable;

    protected $table = "usuarios";
    protected $primaryKey = "usuarios_id";

    protected $fillable = ['email', 'password'];


    /*
    |-------------------------------------------------------------------------------
    | Reglas de validación.
    |-------------------------------------------------------------------------------
   */

    public static function rules() : array{
        return [
            'email' => 'required|email',
            'password' => 'required|min:8'
        ];
    }
    public static function rulesMessages() : array{
        return[
            'email.required' => 'Error: El email no puede estar vacio.',
            'email.email' => 'Error: El email es inválido.',
            'password.required' => 'Error: El password no puede estar vacio.',
            'password.min' => 'Error: El password tiene que ser mayor a 8 caracteres.'

        ];
    }
}
