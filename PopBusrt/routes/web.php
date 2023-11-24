<?php

use App\Http\Controllers\HistorialController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ImagenController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\CouponController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
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

Route::get('/PopBurstInicio', function () {
    return view('PopBurstInicio');
});
Route::get('/Navbar', function () {
    return view('Navbar');
});
Route::get('/Footer', function () {
    return view('Footer');
});

// Establece una ruta GET para la URL '/User', que retorna la vista 'User.blade.php'
Route::get('/User', function () {
    return view('User');
});
// Establece una ruta GET para la URL '/Admin', que retorna la vista 'Admin.blade.php'
Route::get('/Admin', function () {
    return view('Admin');
});
// Establece una ruta GET para la URL '/almacenar-imagen', dirigida a la acción 'almacenarImagen' del controlador 'ImagenController
Route::get('/almacenar-imagen', [ImagenController::class, 'almacenarImagen']);

// Rutas para el controlador de inicio de sesión
Route::get('/Login', [LoginController::class, 'showLoginForm'])->name('Login.show'); // Vista del formulario de inicio de sesión
Route::post('/Login', [LoginController::class, 'login'])->name('Login.login'); // Procesar el formulario de inicio de sesión

// Rutas para el registro
Route::get('/Register', function () {
    return view('Register'); // Modifica aquí el nombre de la vista
})->name('registro.show'); // Vista del formulario de registro
Route::post('/registro', [RegisterController::class, 'registrarUsuario'])->name('registro.registrar'); // Procesar el formulario de registro

Route::get('/Discount', [CouponController::class, 'getCoupon'])->name('coupon');