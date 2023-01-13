<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\ProveedorController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\RolController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\CompraController;

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

Route::get('/', function () {
    return view('auth.login');
});
  
//Route::resource('categoria', 'CategoriaController');
Route::get('categoria',[CategoriaController::class,'index'])->name('categoria.index');

Route::post('categoria',[CategoriaController::class,'store'])->name('categoria.store');

//Route::post('categoria','test',[CategoriaController::class,'update'])->name('categoria.update');

//Route::resource('categoria', 'CategoriaController');
//Route::post('categoria',[CategoriaController::class,'update'])->name('categoria.update');
//Route::post('categoria',[CategoriaController::class,'update'])->name('categoria.update/{id}');
//Route::post('categoria/{id}',[CategoriaController::class,'update'])->name('categoria.update');
Route::put('categoria/{test}',[CategoriaController::class,'update'])->name('categoria.update');

Route::delete('categoria/{test}',[CategoriaController::class,'destroy'])->name('categoria.destroy');
//Route::patch('categoria', 'CategoriaController@update')->name('categoria.update');

//Route::get('categoria',[CategoriaController::class,'store']);
// antes Route::get('/categoria', 'CategoriaController@store');

Route::get('producto',[ProductoController::class,'index'])->name('producto.index');
Route::post('producto',[ProductoController::class,'store'])->name('producto.store');
Route::put('producto/{test}',[ProductoController::class,'update'])->name('producto.update');
Route::delete('producto/{test}',[ProductoController::class,'destroy'])->name('producto.destroy');

Route::get('proveedor',[ProveedorController::class,'index'])->name('proveedor.index');
Route::post('proveedor',[ProveedorController::class,'store'])->name('proveedor.store');
Route::put('proveedor/{test}',[ProveedorController::class,'update'])->name('proveedor.update');
Route::delete('proveedor/{test}',[ProveedorController::class,'destroy'])->name('proveedor.destroy');



Route::get('cliente',[ClienteController::class,'index'])->name('cliente.index');
Route::post('cliente',[ClienteController::class,'store'])->name('cliente.store');
Route::put('cliente/{test}',[ClienteController::class,'update'])->name('cliente.update');



Route::get('rol',[RolController::class,'index'])->name('rol.index');



Route::get('user',[UserController::class,'index'])->name('user.index');
Route::post('user',[UserController::class,'store'])->name('user.store');
Route::put('user/{test}',[UserController::class,'update'])->name('user.update');
Route::delete('user/{test}',[UserController::class,'destroy'])->name('user.destroy');



Auth::routes();
//Route::get('/', [LoginController::class, 'showLoginForm'])->name('/');
//Route::get('/home', [HomeController::class, 'login'])->name('home');
//Route::post('/','Auth\LoginController@showLoginForm');

//Route::post('/login', 'Auth\LoginController@login')->name('login');
//Route::get('/login', 'HomeController@login');
//Route::post('/', [LoginController::class, 'showLoginForm']);


//Route::get('home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/home', [HomeController::class, 'index'])->name('home');


Route::get('compra',[CompraController::class,'index'])->name('compra.index');
Route::get('compra/{id}',[CompraController::class,'show'])->name('compra.show');
//Route::get('compra',[CompraController::class,'show'])->name('compra.show');

//Route::get('compra/{id}',function($id){});

Route::post('compra',[CompraController::class,'store'])->name('compra.store');
Route::put('compra/{test}',[CompraController::class,'update'])->name('compra.update');

//Route::post('compra/{test}',[CompraController::class,'create'])->name('compra.create');
Route::get('compra/create',[CompraController::class,'create'])->name('compra.create');

Route::delete('compra/{test}',[CompraController::class,'destroy'])->name('compra.destroy');

//Route::resource('compra', 'CompraController'); 
Route::get('/pdfCompra/{id}', 'CompraController@pdf')->name('compra_pdf');

