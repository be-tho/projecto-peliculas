<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function loginForm(){
        return view('auth.login');
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

        return redirect()->route('peliculas.index')
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
