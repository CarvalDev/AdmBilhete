<?php

use App\Http\Controllers\CaixaEntradaController;
use App\Http\Controllers\CarroController;
use App\Http\Controllers\CatracaController;
use App\Http\Controllers\FaturamentoController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PassageiroController;
use App\Http\Controllers\ReajusteController;

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
Route::get('/passageiros/form', [PassageiroController::class, 'form'])->name('passageiros.form');
Route::get('/carros',[CarroController::class, 'index'])->name('carros.index');
Route::get('/caixaEntrada',[CaixaEntradaController::class, 'caixaIndex'])->name('caixaEntrada.index');
Route::get('/login',[LoginController::class, 'index'])->name('login.index');
Route::get('/reajuste',[ReajusteController::class, 'index'])->name('reajuste.index');
Route::get('/faturamento', [FaturamentoController::class, 'index'])->name('faturamento.index');
Route::get('/passageirosP/{id}/',[PassageiroController::class, 'perfilPassageiro'])->name('perfilPassageiro.index');
Route::post('/passageiros/store', [PassageiroController::class, 'store'])->name('passageiros.store');
