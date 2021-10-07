<?php

namespace App\Models;


use Illuminate\Notifications\Notifiable;

class Usuario extends \Illuminate\Foundation\Auth\User
{
    use Notifiable;

    protected $table = "usuarios";
    protected $primaryKey = "usuarios_id";
}
