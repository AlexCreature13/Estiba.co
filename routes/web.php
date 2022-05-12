<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IdTypesController;
use App\Http\Controllers\UserTypesController;
use App\Http\Controllers\CategoriasController;
use App\Http\Controllers\UsersController ;
use App\Http\Controllers\ProductosController;
use App\Http\Controllers\PortalController;

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
    return view('portal.index');
});

Auth::routes([
    'login'    => true,
    'logout'   => true,
    'register' => false,
    'reset'    => false,
    'confirm'  => false,
    'verify'   => false,
]);

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('id_types',IdTypesController::class)->middleware('auth');

Route::resource('user_types',UserTypesController::class)->middleware('auth');

Route::resource('users',UsersController::class);

Route::resource('categorias',CategoriasController::class)->middleware('auth');

Route::resource('productos',ProductosController::class)->middleware('auth');

Route::resource('/',PortalController::class);