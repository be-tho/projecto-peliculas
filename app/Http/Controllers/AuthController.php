<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function loginForm(){
        return view('auth.login');
    }

    public function registerForm(){
        return view('auth.registerForm');
    }

    public function create (Request $request){

//        dd($request->input());

        $input = $request->input();

        $request->validate(Usuario::rules(), Usuario::rulesMessages());

        $usuario = Usuario::create([
            'email'    => $input['email'],
            'password' => Hash::make($input['password']),
        ]);

        return redirect()
            ->route('peliculas')
            ->with('message_success', '<p class="text-center mb-0">El usuario <b>' . e($usuario->email). '</b> fue creada correctamente.</p>');

    }

    public function login (Request $request){
//        $credenciales = [
//            'email' => $request->input('email'),
//            'password' => $request->input('password'),
//        ];
        $credenciales = $request->only(['email', 'password']);

        if(!auth()->attempt($credenciales)){
            return redirect()->route('auth.loginForm')
                ->withInput();
        }

        $user = auth()->user();

        return redirect()->route('peliculas')
            ->with('message_success', 'Bienvenido/a de nuevo , <b>' . $user->email . '!</b>');
    }

    public function logout (){
        auth()->logout();
        return redirect()
            ->route('auth.loginForm')
            ->with('message_success', 'Sesión cerrada con éxito. ¡Te esperamos de nuevo!');
    }
    //
}
