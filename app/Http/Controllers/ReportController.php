<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class ReportController extends Controller
{
    // /report/ventas-por-producto
    public function ventasPorProducto()
    {
        $rows = DB::table('orders as o')
            ->join('products as p','p.id','=','o.product_id')
            ->select(
                'p.name as Producto',
                'p.reference as Referencia',
                DB::raw('SUM(o.quantity) as Cantidad'),
                DB::raw('SUM(o.total) as Total')
            )
            ->groupBy('p.name','p.reference')
            ->orderBy('p.name')
            ->get();

        return view('report', [
            'title'   => 'Total de ventas por producto',
            'columns' => ['Producto','Referencia','Cantidad','Total'],
            'rows'    => $rows,
        ]);
    }

    // /report/televisores
    public function comprasTelevisores()
    {
        $rows = DB::table('orders as o')
            ->join('products as p','p.id','=','o.product_id')
            ->join('clients as c','c.id','=','o.client_id')
            ->where('p.name','=','Televisor')
            ->select(
                'p.name as Producto',
                'c.name as Cliente',
                'o.quantity as Cantidad',
                'o.total as Total'
            )
            ->orderBy('c.name')
            ->get();

        return view('report', [
            'title'   => 'Reporte de compras de televisores',
            'columns' => ['Producto','Cliente','Cantidad','Total'],
            'rows'    => $rows,
        ]);
    }

    // /report/clientes-mayores-10m
    public function clientesMasDeDiezMillones()
    {
        $rows = DB::table('orders as o')
            ->join('clients as c','c.id','=','o.client_id')
            ->select(
                'c.name as Nombre',
                'c.last_name as Apellido',
                DB::raw('SUM(o.total) as Total')
            )
            ->groupBy('c.name','c.last_name')
            ->havingRaw('SUM(o.total) > 10000000')
            ->orderBy('Total','desc')
            ->get();

        return view('report', [
            'title'   => 'Clientes con compras superiores a 10.000.000',
            'columns' => ['Nombre','Apellido','Total'],
            'rows'    => $rows,
        ]);
    }

    // /report/total-productos
    public function totalProductos()
    {
        $rows = collect([ (object)[
            'TotalProductosOrdenados' => DB::table('orders')->sum('quantity')
        ]]);

        return view('report', [
            'title'   => 'Total de productos ordenados',
            'columns' => ['TotalProductosOrdenados'],
            'rows'    => $rows,
        ]);
    }
}
