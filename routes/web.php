<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PeliculasController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/',[HomeController::class, 'home'])
    ->name('home');

Route::get('/contacto',[HomeController::class, 'contacto'])
    ->name('contacto');

Route::get('/planes', [HomeController::class , 'planes'])
    ->name('planes');

/*
 |----------------------------------------------------------------------------------------
 | Autenticación
 |-------------------------------------------------------------------------------------------
 */
Route::get('iniciar-sesion', [AuthController::class, 'loginForm'])
    ->name('auth.loginForm');

Route::post('iniciar-sesion', [AuthController::class, 'login'])
    ->name('auth.login');

Route::post('cerrar-sesion', [AuthController::class, 'logout'])
    ->name('auth.logout');


Route::get('peliculas', [PeliculasController::class, 'index'])
    ->name('peliculas.index');

Route::get('peliculas/nueva', [PeliculasController::class, 'createForm'])
    ->name('peliculas.createForm')
    ->middleware(['auth']);

Route::post('peliculas/nueva', [PeliculasController::class, 'create'])
    ->name('peliculas.create')
    ->middleware(['auth']);

Route::get('peliculas/{id}', [PeliculasController::class, 'show'])
    ->name('peliculas.show')
    ->whereNumber('id');

Route::get('peliculas/{id}/editar', [PeliculasController::class, 'editForm'])
    ->name('peliculas.editForm')
    ->middleware(['auth']);

Route::put('peliculas/{id}/editar', [PeliculasController::class, 'edit'])
    ->name('peliculas.edit')
    ->middleware(['auth']);


Route::delete('peliculas/{id}/eliminar', [PeliculasController::class, 'delete'])
    ->name('peliculas.delete')
    ->middleware(['auth']);



