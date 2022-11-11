<?php

use App\Http\Controllers\homeController;
use App\Http\Controllers\librosController;
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

Route::get('/', [homeController::class, 'index']);
Route::get('/register', [homeController::class, 'register']);

Route::post('login', [homeController::class, 'login']);
Route::post('registrar', [homeController::class, 'registrar']);

Route::get('/librosP', [librosController::class, 'privados_index']);
Route::get('/librosP/{id}', [librosController::class, 'editar'])->name('editarL');

Route::get('/librosA', [librosController::class, 'publicos_index']);
Route::get('/librosA/{id}', [librosController::class, 'editarPublico'])->name('editarP');

Route::post('/newbook', [librosController::class, 'create']);
Route::post('/editarL', [librosController::class, 'editarlibro']);

route::delete('/librosP/{id}', [librosController::class, 'borrarlibro'])->name('borrarL');
route::delete('/librosA/{id}', [librosController::class, 'borrarPublico'])->name('borrarP');