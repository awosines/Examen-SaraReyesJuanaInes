<?php

namespace App\Http\Controllers;

use App\detalles_factura;
use Illuminate\Http\Request;

class DetallesFacturaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $detalle_factura = new detalle_factura;
        $detalle_factura->folio_factura = request('folio_factura');
        $detalle_factura->id_producto = request('id_producto');
        $detalle_factura->cantidad = request('cantidad');
        $detalle_factura->save();
        return response()->json($detalle_factura);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\detalles_factura  $detalles_factura
     * @return \Illuminate\Http\Response
     */
    public function show(detalles_factura $detalles_factura)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\detalles_factura  $detalles_factura
     * @return \Illuminate\Http\Response
     */
    public function edit(detalles_factura $detalles_factura)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\detalles_factura  $detalles_factura
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, detalles_factura $detalles_factura)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\detalles_factura  $detalles_factura
     * @return \Illuminate\Http\Response
     */
    public function destroy(detalles_factura $detalles_factura)
    {
        detalle_factura::destroy($id);
        return 'El registro fue eliminado';
    }
}
