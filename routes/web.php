<?php

use App\Http\Controllers\AulaVirtualController;
use App\Http\Controllers\EstudianteController;
use App\Http\Controllers\LoginController;
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

// Route::get('/', function () {
//     return view('template.plantilla');
// });
// Route::get('/', function () {
//     return view('pages.home');
// });
// Route::get('/inscripcion', function () {
//     return view('pages.preinscripcion')->name('pages.preinscripcion');
// });
Route::controller(EstudianteController::class)->group(function () {
    Route::get('/', [EstudianteController::class, 'index'])->name('pages.home');
    Route::get('/', [EstudianteController::class, 'index'])->name('pages.home');
    Route::get('/inscripcion', [EstudianteController::class, 'preInscripcion'])->name('pages.preinscripcion');
    Route::get('/nosotros', [EstudianteController::class, 'nosotros'])->name('pages.nosotros');
});

Route::controller(AulaVirtualController::class)->group(function () {
    Route::get('/aula', [AulaVirtualController::class, 'aulaVirtual'])->name('aula-virtual.home');
});


Route::controller(LoginController::class)->group(function () {

    Route::get('/login', [LoginController::class, 'login'])->name('autenticacion.login');
});
