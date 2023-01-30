<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;

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

Route::get('/dudas', function () {
    return view('dudas');
}); 

Route::get('/contacto', function () {
    return view('contacto');
});

Route::get('/servicios', function () {
    return view('servicios');
});
Route::get('/blog', function () {
    return view('blog');
});
Route::get('/equipo', function () {
    return view('equipo');
});
Route::get('/cliente', function () {
    return view('cliente');
});
Route::get('/liberconsultas', function () {
    return view('liberconsultas');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['middleware' => ['auth']], function() {
    Route::resource('roles', RoleController::class);
    Route::resource('users', UserController::class);
});
