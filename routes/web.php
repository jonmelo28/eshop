<?php

use App\Http\Controllers\ClienteController;
use App\Http\Controllers\ProdutoController;
use App\Models\Produto;
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

Route::match(['get','post'], '/', [ProdutoController::class, 'index'])->name('home');
Route::match(['get','post'], '/{idcategoria}/categoria', [ProdutoController::class, 'categoria'])->name('categoria_por_id');
Route::match(['get','post'], '/0/categoria', [ProdutoController::class, 'categoria'])->name('categoria');
//ficou na aula 12 https://www.youtube.com/watch?v=WxLNImP_PwA&list=PLC7cuCjn9-OWsC2omIZdY4cLm4_WMzwQE&index=12
Route::match(['get','post'], '/cadastrar', [ClienteController::class, 'cadastrar'])->name('cadastrar');
Route::match(['get','post'], '/{idproduto}/carrinho/adicionar', [ProdutoController::class, 'adicionarCarrinho'])->name('adicionar_carrinho');
Route::match(['get','post'], '/carrinho', [ProdutoController::class, 'verCarrinho'])->name('ver_carrinho');