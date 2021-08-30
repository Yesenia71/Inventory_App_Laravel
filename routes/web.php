<?php

use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

Route::get('/Usuario', function () {
    return ('ruta de USUSARIO');
});

Route::get('/user/{name?}', function ($name = 'Yesenia') {
    return $name;
});

use App\Http\Controllers\ProductController;

Route::get('/form/{id?}', [PersonaController::class, 
"mostrarForm"]
) -> where ('id', '[0-9]+');

//use Illuminate\Support\Facades\DB;
use App\Models\Product;
Route::get('/products', function(){
    // $products = DB::table('product')->get();
    $products = Product::get();
    return dd($products); //var_dump
});

/*
    *Cree una ruta para mostrar todos los productos 
*/
Route::get('/ListProducts',[ProductController::class,"show"])->name('Productos');

/*roteo para el boton de borrar*/
 Route::get('/ListProducts/delete/{id}',[ProductController::class, 'delete'])->name('prodDelete');

 
 /*ruta para registro de productos*/ 
 //Route::get('/products/formulario',[ProductController::class,"registro"]);
 Route::get('products/form',[ProductController::class,"form"])->name('products.form');

 //ruta para save
 Route::post('products/save',[ProductController::class,"save"])->name('products.save');