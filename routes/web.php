<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ReportController;

Route::redirect('/', '/report/ventas-por-producto');

Route::controller(ReportController::class)->group(function () {
    Route::get('/report/ventas-por-producto', 'ventasPorProducto');
    Route::get('/report/televisores', 'comprasTelevisores');
    Route::get('/report/clientes-mayores-10m', 'clientesMasDeDiezMillones');
    Route::get('/report/total-productos', 'totalProductos');
});
