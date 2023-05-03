<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AlumnoController;

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

Route:: resource('/alumnos',AlumnoController::class);
//esta manera de crar las rutas es mas larga pero hace lo mismo que el resource
//Route::get ('alumnos','AlumnoController::class, index');
//Route::get ('alumnos/create','AlumnoController::class, create');