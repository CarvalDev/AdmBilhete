<?php

use App\Http\Controllers\CaixaEntradaController;
use App\Http\Controllers\CatracaController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PassageiroController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home',[HomeController::class,'index'])->name('home.index');
Route::get('/passageiros',[PassageiroController::class, 'passageiroIndex'])->name('passageiros.index');
Route::get('/catracas',[CatracaController::class, 'catracaIndex'])->name('catracas.index');
Route::get('/caixaEntrada',[CaixaEntradaController::class, 'caixaIndex'])->name('caixaEntrada.index');