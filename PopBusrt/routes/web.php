<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ImagenController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategoryController;
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
// historial de compras
Route::get('/historialCompras', function () {
    return view('historialCompras');
});
Route::get('/listaDeseo', function () {
    return view('listaDeseo');
});
Route::get('/welcome', function () {
    return view('welcome');
});
// Establece una ruta GET para la URL '/PopBurst', que retorna la vista 'PopBurst.blade.php'
Route::get('/', function () {
    return view('PopBurst');
});
Route::get('/Navbar', function () {
    return view('Navbar');
});
// Establece una ruta GET para la URL '/Front-page', que retorna la vista 'Front-page.blade.php'
Route::get('/Front-page', function () {
    return view('Front-page');
});
Route::get('/Footer', function () {
    return view('Footer');
});
// Establece una ruta GET para la URL '/User', que retorna la vista 'User.blade.php'
Route::get('/User', function () {
    return view('User');
});
// Establece una ruta GET para la URL '/User', que retorna la vista 'User.blade.php'
Route::get('/Products', function () {
    return view('Products');
});
// Establece una ruta GET para la URL '/RegisterProducts', que retorna la vista 'RegisterProducts.blade.php'
Route::get('/RegisterProducts', function () {
    return view('RegisterProducts');
});
Route::get('/Admin/Products/Create', [AdminController::class, 'createProduct'])->name('admin.product.create');
Route::get('/Historial', function () {
    return view('Historial');
});

// Establece una ruta GET para la URL '/Admin', que retorna la vista 'Admin.blade.php'
Route::get('/Admin', function () {
    return view('Admin');
});

Route::get('/Admin/Supplier', [AdminController::class, 'getSuppliers'])->name('admin.supplier');
Route::get('/Admin/Supplier/Create', [AdminController::class, 'createSupplier'])->name('admin.supplier.create');

//Muestra todos los usuarios en una tabla
Route::get('/Admin/Users', [AdminController::class, 'getUsers'])->name('admin.users');
Route::get('/Admin/Users/Create', [AdminController::class, 'createUser'])->name('admin.user.create');
Route::get('/Admin/Users/{user}', [AdminController::class, 'updateUser'])->name('admin.user.update');


Route::get('/Admin/Products', [AdminController::class, 'getProducts'])->name('admin.product');

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

//ruta de la wishlist de cada usuario
Route::get('/api/users/{userId}/wishlist', 'AdminController@getUserWishlist');




//Muestra las categorias
Route::get('/Admin/Categories', [CategoryController::class, 'getCategory'])->name('admin.categories');
Route::get('/Admin/Categories/Create', [CategoryController::class, 'CreateCategory'])->name('admin.categories.create');
Route::get('/Admin/Categories/{category}', [CategoryController::class, 'updateCategory'])->name('admin.category.update');

