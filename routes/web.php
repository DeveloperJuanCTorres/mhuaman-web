<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/nosotros', [App\Http\Controllers\HomeController::class, 'about'])->name('about');
Route::get('/cursos', [App\Http\Controllers\HomeController::class, 'cursos'])->name('cursos');
Route::get('/clientes', [App\Http\Controllers\HomeController::class, 'clientes'])->name('clientes');
Route::get('/consultoria', [App\Http\Controllers\HomeController::class, 'consultoria'])->name('consultoria');
Route::get('/checkout', [App\Http\Controllers\HomeController::class, 'checkout'])->name('checkout');


Route::middleware('auth')->group(function () {

    Route::get('/perfil', [ProfileController::class, 'index'])
        ->name('perfil');

    Route::put('/perfil', [ProfileController::class, 'update'])
        ->name('perfil.update');

});

Route::post(
    '/consultorias/enviar',
    [App\Http\Controllers\HomeController::class, 'enviar']
)->name('consultorias.enviar');


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
