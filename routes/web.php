<?php

use App\Http\Controllers\AdmController;
use App\Http\Controllers\CaixaEntradaController;


use App\Http\Controllers\FaturamentoController;
use App\Http\Controllers\FormularioPassageiroControler;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LinhasController;
use App\Http\Controllers\LoginController;
use App\Mail\RespostaSuporteMail;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PassageiroController;
use App\Http\Controllers\PrecoController;
use App\Http\Controllers\ReajusteController;
use Illuminate\Support\Facades\Mail;

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


Route::group(['middleware' => 'adm'], function(){
Route::put('/carros/status/update', [LinhasController::class, 'updateStatusCarro'])->name('carros.status.update'); 
Route::post('/linhas/store',[LinhasController::class, 'store'])->name('linhas.store');
Route::post('/linhas/{idLinha}/carros/store', [LinhasController::class, 'storeCarro'])->name('carros.store');
Route::put('/linhas/{id}/status/update', [LinhasController::class, 'updateStatus'])->name('linhas.status.update');

Route::get('/',[HomeController::class,'index'])->name('home.index');
Route::get('/passageiros',[PassageiroController::class, 'passageiroIndex'])->name('passageiros.index');
Route::get('/passageiros/form', [PassageiroController::class, 'form'])->name('passageiros.form');
Route::get('/linhas',[LinhasController::class, 'index'])->name('linhas.index');
Route::get('/linhas/register',[LinhasController::class, 'register'])->name('linhas.register');
Route::get('/caixaEntrada',[CaixaEntradaController::class, 'caixaIndex'])->name('caixaEntrada.index');
Route::get('/caixaEntrada/{id}/show', [CaixaEntradaController::class, 'show'])->name('caixaEntrada.show');

Route::get('/preco', [PrecoController::class, 'index'])->name('preco.index');
Route::get('/preco/{id}/edit', [PrecoController::class, 'edit'])->name('preco.edit');
Route::put('/preco/{id}/update', [PrecoController::class, 'update'])->name('preco.update');
Route::get('/reajuste', [ReajusteController::class, 'store'])->name('reajuste.store');
Route::get('/faturamento', [FaturamentoController::class, 'index'])->name('faturamento.index');
Route::get('/passageirosP/{id}/',[PassageiroController::class, 'perfilPassageiro'])->name('perfilPassageiro.index');
Route::get('/linhas/{id}/show', [LinhasController::class, 'show'])->name('linhas.show');
Route::post('/passageiros/store', [PassageiroController::class, 'store'])->name('passageiros.store');
Route::put('/linhas/{id}/update', [LinhasController::class, 'update'])->name('linhas.update');
Route::get('passageiros/AddBilhete/{id}', [PassageiroController::class, 'addBilhete'])->name('passageiros.addBilhete');
Route::post('passageiros/{id}/bilhetes/store', [PassageiroController::class, 'bilheteStore'])->name('passageiros.bilhetes.store');
// Route::get('/email', function(){
//     Mail::to('carvalhohugo425@gmail.com')
//     ->send(new RespostaSuporteMail());
// });
Route::post('/caixaEntrada/{id}/{idSuporte}/email', [CaixaEntradaController::class, 'sendMail'])->name('caixaEntrada.mail');
Route::post('passageiros/bilhetes/passagens/store', [PassageiroController::class, 'storePassagens'])->name('passageiro.passagens.store');
Route::put('passageiros/bilhetes/passagens/update', [PassageiroController::class, 'updatePassagens'])->name('passageiro.passagens.update');
Route::put('/caixaEntrada/{id}/update', [CaixaEntradaController::class, 'update'])->name('caixaEntrada.suporte.update');
Route::get('/adm',[AdmController::class,	'index'])->name('adm.index');
Route::get('/adm/form',[AdmController::class,	'form'])->name('adm.form');
Route::post('/adm/store', [AdmController::class, 'store'])->name('adm.store');
Route::get('/adm/perfil', [AdmController::class, 'perfil'])->name('adm.perfil');
Route::get('adm/{id}/edit', [AdmController::class, 'edit'])->name('adm.edit');
Route::delete('adm/{id}/destroy', [AdmController::class, 'destroy'])->name('adm.destroy');
Route::put('adm/{id}/update', [AdmController::class, 'update'])->name('adm.update');
Route::get('/adm/results', [AdmController::class, 'search'])->name('adm.search');
Route::post('/logout', [AdmController::class, 'logout'])->name('adm.logout');

});
Route::get('/formulariopassageiro', [FormularioPassageiroControler::class, 'index'])->name('formulariopassageiro.index');




Route::post('/login', [AdmController::class, 'login'])->name('adm.login');


Route::get('/login',[LoginController::class, 'index'])->name('login.index');
