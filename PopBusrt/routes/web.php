<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ImagenController;
use Illuminate\Http\Request;

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
// Establece una ruta GET para la URL '/PopBurst', que retorna la vista 'PopBurst.blade.php'
Route::get('/PopBurst', function () {
    return view('PopBurst');
});
// Establece una ruta GET para la URL '/almacenar-imagen', dirigida a la acción 'almacenarImagen' del controlador 'ImagenController
Route::get('/almacenar-imagen', [ImagenController::class, 'almacenarImagen']);