<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ReciboController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect('/login');
});

Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login.submit');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::middleware('auth')->group(function () {

    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    Route::get('/recibos/{id}', [ReciboController::class, 'show'])->name('recibos.show');

    Route::post('/recibos/{id}/status', [ReciboController::class, 'updateStatus'])->name('recibos.updateStatus');

    Route::get('/finalizar-trabalho', [DashboardController::class, 'finalizarTrabalho'])->name('finalizar.trabalho');

});
