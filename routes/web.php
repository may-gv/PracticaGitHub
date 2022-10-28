<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\controladorVistas;

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

/*Route::get('/', function () {
    return view('welcome');
});*/
/*
Route::get('/formulario', function () {
    return view('formulario');
});
Route::get('/tabla', function () {
    return view('tabla');
});*/

Route::get('/formulario', [controladorVistas::class, 'viewFormulario'])->name('apodoForm');

Route::get('/tabla', [controladorVistas::class, 'viewTabla'])->name('apodoTabla');

Route::post('GuardarPedido',[controladorVistas::class,'validarFormulario'])->name('Guardar');





