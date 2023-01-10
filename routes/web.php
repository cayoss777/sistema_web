<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoriaController;
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
    return view('principal');
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