<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

use App\Models\Product;

/*Route::get('/', function () {
    return view('welcome');
});*/
//Route::resource('Productos',[ProductController::class]);
Route::get('productos', [ProductController::class, 'welcome' ])->name('welcome');

Route::get('productos/index', [ProductController::class, 'index' ])->name('productos.index');  //para mostrar todos los elementos de la base de datos

Route::get('productos/create', [ProductController::class, 'create' ])->name('productos.create');  //para abrir la vista del formulario

Route::post('productos/store', [ProductController::class, 'store' ])->name('productos.store');  //para guardar mi formulario en la DB

Route::get('productos/show', [ProductController::class, 'show' ])->name('productos.show');  //para mostrar detalles de la base de datos

Route::get('productos/edit/{id}', [ProductController::class, 'edit' ])->name('productos.edit');

Route::put('productos/update/{id}', [ProductController::class, 'update' ])->name('productos.update');

Route::delete('productos/delete/{id}', [ProductController::class, 'destroy' ])->name('productos.delete');

//Route::get('/', [ProductoController::class, 'bienvenido' ])->name('welcome');
//Route::get('presupuesto', [ProductoController::class, 'presupuesto' ])->name('presupuesto');

