<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
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
   /*  Route::resource('roles', RoleController::class);
    Route::resource('users', UserController::class); */
    Route::get('/liberconsultas',function(){ 
        return view('liberconsultas');
    });
}); 

Route::group(['middleware' => ['auth:web']], function() { 
    Route::resource('roles', RoleController::class);
    Route::resource('users', UserController::class);

    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home'); 

    Route::get('/admin/clientes', function () {
        return view('admin.clientes');
    });

    Route::get('/admin/bots', function () {
        return view('admin.bots');
    });

    Route::get('/admin/sugerencias', function () {
        return view('admin.sugerencias');
    });

    Route::get('/admin/usuarios', function () {
        return view('admin.usuarios');
    });
}); 

Route::get('/logout',[LoginController::class,'logout']);
