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
/*
Route::get('/', function () {
    return 'Olá, seja bem vindo ao curso!';
});
*/

Route::get('/', 'PrincipalController@principal')->name('site.index');
Route::get('/sobre-nos', 'SobreNosController@sobreNos')->name('site.sobrenos');
Route::get('/contato', 'ContatoController@contato')->name('site.contato');
Route::get('/login', function () {return 'Login'; })->name('site.login');
return 'Login';


Route::prefix('/app')->group(function () {
    Route::get('/clientes', function () {return 'clientes'; })->name('app.clientes');
    Route::get('/fornecedores', function () {return 'fornecedores'; })->name('app.cliente');
    Route::get('/produtos', function () {return 'produtos'; })->name('app.produtos'); 
});
