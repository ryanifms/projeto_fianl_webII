<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\loginController;
use App\Http\Controllers\cadastroController;
use App\Http\Controllers\dashboardController;
use App\Http\Controllers\RelatorioController;
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

Route::get('/', function () {
    return view('welcome');
});
    // listar
 Route::get('/', [loginController::class, 'index']);
 Route::get('/cadastro', [cadastroController::class, 'index']);
 Route::get('/dashboard', [dashboardController::class, 'index']);
 Route::get('/dashboard/novo', [dashboardController::class, 'create']);
 //Route::get('/dashboard/alterar', [dashboardController::class, 'edit']);

Route::get('/dashboard/editar/{id}', [DashboardController::class, 'edit']);
Route::put('/dashboard/atualizar/{id}', [DashboardController::class, 'update']);

// criar
Route::post('/dashboard/salvar', [DashboardController::class, 'store']);

// excluir 
Route::delete('dashboard/excluir', [DashboardController::class,'destroy']);

// relatorio
Route::get('/relatorio',[RelatorioController::class,'gerarRelatorio']);
