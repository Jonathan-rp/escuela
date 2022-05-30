<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AsignationController;
use App\Http\Controllers\EstudianteController;
use App\Http\Controllers\MateriaController;

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

Route::get('escuela/public/menu', function () {
    return view('menu.menu');
});

Route::resource('estudiantes', EstudianteController::class);

Route::resource('materias', MateriaController::class);

Route::resource('asignations', AsignationController::class);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
