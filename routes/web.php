<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\BotsController;
use App\Http\Controllers\WikiController;
use App\Http\Controllers\LiberfyConsultasController;
use App\Http\Controllers\Auth\LoginController;
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
/* Route::get('/cliente', function () {
    return view('cliente');
})->name('cliente'); */
/* Route::view('liberconsultas','liberconsultas')->middleware('auth'); */
/* Route::get('/liberconsultas', function () {
    return view('liberconsultas');
}); */
/* Route::post('login_client', function() { 

    $credentials = request()->only('email', 'password');
    dd(Auth::attempt($credentials));

    if(Auth::attempt($credentials)) { 
        dd('aqui');
        request()->session()->regenerate(); 
        return view('liberconsultas');
    }
    dd('o aqui');
})->middleware('guest'); */ 

Auth::routes();

Route::get('/cliente',[LoginController::class,'showClienteLoginForm'])->name('cliente');
Route::post('/cliente',[LoginController::class,'clienteLogin'])->name('cliente');



/* Route::get('/liberconsultas',function(){ 
    return view('liberconsultas');
})->middleware('auth:cliente'); */

Route::group(['middleware' => ['auth:cliente']], function() { 

    Route::get('/liberconsultas', [App\Http\Controllers\LiberfyConsultasController::class, 'index'])->name('liberconsultas'); 
    Route::post('/sugerencias/store', [App\Http\Controllers\LiberfyConsultasController::class, 'store'])->name('sugerencia');
   /*  Route::resource('roles', RoleController::class);
    Route::resource('users', UserController::class); */
   /*  Route::get('/liberconsultas',function(){ 
        return view('liberconsultas');
    }); */
}); 

Route::group(['middleware' => ['auth:web']], function() { 
    Route::resource('roles', RoleController::class);
    Route::resource('users', UserController::class);

    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home'); 
    Route::get('/admin/clientes', [App\Http\Controllers\UserClientController::class, 'index'])->name('clientes'); 

    Route::get('/admin/bots', [App\Http\Controllers\BotsController::class, 'index'])->name('bots'); 
    Route::get('/admin/bots/create', [App\Http\Controllers\BotsController::class, 'create'])->name('bot.create'); 
    Route::post('/admin/bots/store', [App\Http\Controllers\BotsController::class, 'store'])->name('bot.store'); 
    Route::get('/admin/bots/edit/{id}', [App\Http\Controllers\BotsController::class, 'edit'])->name('bot.edit'); 
    Route::put('/admin/bots/update/{id}', [App\Http\Controllers\BotsController::class, 'update'])->name('bot.update'); 

    Route::get('/admin/usuarios', [App\Http\Controllers\UserController::class, 'index'])->name('users');

    Route::get('/admin/wiki', [App\Http\Controllers\WikiController::class, 'index'])->name('wiki'); 
    Route::get('/admin/wiki/create', [App\Http\Controllers\WikiController::class, 'create'])->name('wiki.create'); 
    Route::post('/admin/wiki/store', [App\Http\Controllers\WikiController::class, 'store'])->name('wiki.store'); 
    Route::get('/admin/wiki/edit/{id}', [App\Http\Controllers\WikiController::class, 'edit'])->name('wiki.edit'); 
    Route::put('/admin/wiki/update/{id}', [App\Http\Controllers\WikiController::class, 'update'])->name('wiki.update'); 


    Route::get('/admin/sugerencias', function () {
        return view('admin.sugerencias');
    });

    /* Route::get('/admin/usuarios', function () {
        return view('admin.usuarios');
    }); */
}); 

Route::get('/logout',[LoginController::class,'logout']);
