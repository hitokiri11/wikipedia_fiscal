<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\BotsController;
/* use App\Http\Controllers\WikiController; */
use App\Http\Controllers\LiberfyConsultasController;
use App\Http\Controllers\SugerenciasController;
use App\Http\Controllers\BlogConrtoller;
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

/* Route::get('/blog', function () {
    return view('blog');
}); */
Route::get('/blog', [App\Http\Controllers\BlogConrtoller::class, 'index_blog'])->name('blogs_index'); 
Route::get('/blog/show/{id}', [App\Http\Controllers\BlogConrtoller::class, 'show'])->name('blogs_show'); 

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
    Route::get('/admin/clientes/sincronizar', [App\Http\Controllers\UserClientController::class, 'sincronizar'])->name('clientes.sincronizar'); 

    Route::get('/admin/bots', [App\Http\Controllers\BotsController::class, 'index'])->name('bots'); 
    Route::get('/admin/bots/create', [App\Http\Controllers\BotsController::class, 'create'])->name('bot.create'); 
    Route::post('/admin/bots/store', [App\Http\Controllers\BotsController::class, 'store'])->name('bot.store'); 
    Route::get('/admin/bots/edit/{id}', [App\Http\Controllers\BotsController::class, 'edit'])->name('bot.edit'); 
    Route::put('/admin/bots/update/{id}', [App\Http\Controllers\BotsController::class, 'update'])->name('bot.update'); 
    Route::get('/admin/bots/delete/{id}', [App\Http\Controllers\BotsController::class, 'destroy'])->name('bot.delete'); 

    Route::get('/admin/usuarios', [App\Http\Controllers\UserController::class, 'index'])->name('users');
    Route::get('/admin/usuarios/create', [App\Http\Controllers\UserController::class, 'create'])->name('users.create'); 
    Route::post('/admin/usuarios/store', [App\Http\Controllers\UserController::class, 'store'])->name('users.store'); 
    Route::get('/admin/usuarios/edit/{id}', [App\Http\Controllers\UserController::class, 'edit'])->name('users.edit'); 
    Route::put('/admin/usuarios/update/{id}', [App\Http\Controllers\UserController::class, 'update'])->name('users.update');
    Route::delete('/admin/usuarios/delete', [App\Http\Controllers\UserController::class, 'destroy'])->name('users.delete'); 

    /* Route::get('/admin/wiki', [App\Http\Controllers\WikiController::class, 'index'])->name('wiki'); 
    Route::get('/admin/wiki/create', [App\Http\Controllers\WikiController::class, 'create'])->name('wiki.create'); 
    Route::post('/admin/wiki/store', [App\Http\Controllers\WikiController::class, 'store'])->name('wiki.store'); 
    Route::get('/admin/wiki/edit/{id}', [App\Http\Controllers\WikiController::class, 'edit'])->name('wiki.edit'); 
    Route::put('/admin/wiki/update/{id}', [App\Http\Controllers\WikiController::class, 'update'])->name('wiki.update');  */

    Route::get('/admin/sugerencias', [App\Http\Controllers\SugerenciasController::class, 'index'])->name('sugerencias.index');

    Route::get('/admin/admin_blogs', [App\Http\Controllers\BlogConrtoller::class, 'index'])->name('blogs'); 
    Route::get('/admin/admin_blogs/create', [App\Http\Controllers\BlogConrtoller::class, 'create'])->name('blogs.create'); 
    Route::post('/admin/admin_blogs/store', [App\Http\Controllers\BlogConrtoller::class, 'store'])->name('blogs.store'); 
    Route::get('/admin/admin_blogs/edit/{id}', [App\Http\Controllers\BlogConrtoller::class, 'edit'])->name('blogs.edit'); 
    Route::put('/admin/admin_blogs/update/{id}', [App\Http\Controllers\BlogConrtoller::class, 'update'])->name('blogs.update'); 
    Route::delete('/admin/admin_blogs/delete/{id}', [App\Http\Controllers\BlogConrtoller::class, 'destroy'])->name('blogs.delete'); 

    Route::get('/admin/roles', [App\Http\Controllers\RoleController::class, 'index'])->name('roles'); 
    Route::get('/admin/roles/create', [App\Http\Controllers\RoleController::class, 'create'])->name('roles.create'); 
    Route::post('/admin/roles/store', [App\Http\Controllers\RoleController::class, 'store'])->name('roles.store');
    Route::get('/admin/roles/edit/{id}', [App\Http\Controllers\RoleController::class, 'edit'])->name('roles.edit'); 
    Route::put('/admin/roles/update/{id}', [App\Http\Controllers\RoleController::class, 'update'])->name('roles.update');
    Route::get('/admin/roles/delete/{id}', [App\Http\Controllers\RoleController::class, 'destroy'])->name('roles.delete'); 
    /* Route::get('/admin/sugerencias', function () {
        return view('admin.sugerencias');
    });
 */
    /* Route::get('/admin/usuarios', function () {
        return view('admin.usuarios');
    }); */
}); 

Route::get('/logout',[LoginController::class,'logout']);
