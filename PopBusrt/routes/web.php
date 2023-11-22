<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ImagenController;
use App\Http\Controllers\LoginController;

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

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/PopBurst', function () {
    return view('PopBurst');
});

Route::get('/almacenar-imagen', [ImagenController::class, 'almacenarImagen']);

// Rutas para el controlador de inicio de sesión
Route::get('/Login', [LoginController::class, 'showLoginForm'])->name('Login.show'); // Vista del formulario de inicio de sesión
Route::post('/Login', [LoginController::class, 'login'])->name('Login.login'); // Procesar el formulario de inicio de sesión

// Rutas para el registro
Route::get('/registro', function () {
    return view('Register'); // Modifica aquí el nombre de la vista
})->name('registro.show'); // Vista del formulario de registro
Route::post('/registro', [RegisterController::class, 'registrarUsuario'])->name('registro.registrar'); // Procesar el formulario de registro
