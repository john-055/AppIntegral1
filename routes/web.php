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
Auth::routes(['verify' => true]);

Route::get('/', function () {
    return view('welcome');
});

Route::get('/inicioStripper', function () {
    return view('components.stripper.inicioStripper');
})->name('inicioStripper')->middleware('verified')->middleware('can:inicioStripper');

Route::get('/inicioAdmin', function () {
    return view('components.administrador.incioAdmin');
})->name('inicioAdmin')->middleware('verified')->middleware('can:inicioAdmin');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('verified');

Route::get('/inicioUser', function () {
    return view('components.usuario.inicioUser');
})->middleware('verified')->middleware('can:inicioUser');

Route::post('/resgistro', [App\Http\Controllers\Auth\RegisterController::class,'create'])->name('registro'); 

Route::get('/editarPerfil', function(){
    return view('/components/stripper/editarPerfil');
})->name('perfil')->middleware('verified');


Route::get('/clear-cache', function () {
    echo Artisan::call('config:clear');
    echo Artisan::call('config:cache');
    echo Artisan::call('cache:clear');
    echo Artisan::call('route:clear');
 });
