<?php

namespace App\Http\Controllers;

use App\Models\Pais;
use App\Models\Pelicula;
use Illuminate\Http\Request;

class PeliculasController extends Controller
{
    public function index(){
        //traemos todos los registros de la tabla a través del modelo Pelicula

//        $peliculas = Pelicula::all();
        $peliculas = Pelicula::with('pais')->get();

        return view('peliculas.index', ['peliculas' => $peliculas,]);
    }

    public function show($id){

        $pelicula = Pelicula::findOrFail($id);

        return view('peliculas.show', [
           'pelicula' =>  $pelicula,
        ]);
    }

    public function createForm(){
        $paises = Pais::all();
        return view('peliculas.form-create', [
            'paises' => $paises,
        ]);
    }

    public function create(Request $request){

        $input  = $request->input();

        $request->validate(Pelicula::rules(), Pelicula::rulesMessages());


        //File upload
        if($request->hasFile('poster')){

            $poster = $request->file('poster');

            //asignamos el nombre unico con la hora del ordenador
            $nombrePoster = time() . "." . $poster->clientExtension();

            //primera manera de guardar
//          $poster->move(public_path('imgs'), $nombrePoster);

            $poster->storeAs('', $nombrePoster, 'public_imgs');

            //guardamos el nombre del archivo en los datos a grabar.
            $input['poster'] = $nombrePoster;
        }

        $pelicula = Pelicula::create($input);

//        User::create($input);

        return redirect()
            ->route('peliculas.index')
            ->with('message_success', '<p class="text-center mb-0">La pelicula <b>' . e($pelicula->titulo). '</b> fue creada correctamente.</p>');
    }

    public function editForm($id){
        $paises = Pais::all();
        $pelicula = Pelicula::findOrFail($id);
            return view('peliculas.form-edit', [
                'pelicula' => $pelicula,
                'paises' => $paises,
            ]);
    }
    public function edit(Request $request, $id){
        $request->validate(Pelicula::rules(), Pelicula::rulesMessages());

        $input = $request->input();
        $pelicula = Pelicula::findOrFail($id);

        //File upload
        if($request->hasFile('poster')){

            $poster = $request->file('poster');

            //asignamos el nombre unico con la hora del ordenador
            $nombrePoster = time() . "." . $poster->clientExtension();
            $poster->storeAs('', $nombrePoster, 'public_imgs');

            //guardamos el nombre del archivo en los datos a grabar.
            $input['poster'] = $nombrePoster;
            $posterViejo = $pelicula->poster;
        }else{
            $posterViejo = null;
        }


        $pelicula->update($input);

        //si se cambio el postar, entonces borramos el viejo

        if($request->hasFile('poster')){
            //unlink es la función de php para iliminar un archivo en el disco
            unlink(public_path('imgs/' . $posterViejo));
        }

        return redirect()
            ->route('peliculas.index')
            ->with('message_success', '<p class="text-center mb-0">La pelicula <b>' . e($pelicula->titulo). '</b> fue editada correctamente</p>');

    }


    public function delete($id){
        $pelicula = Pelicula::findOrFail($id);
        $pelicula->delete();
        return redirect()->route('peliculas.index')
            ->with('message_success', '<p class="text-center mb-0">La pelicula ' . e($pelicula->titulo) . ' fue eliminada correctamente </p>');
    }
}
