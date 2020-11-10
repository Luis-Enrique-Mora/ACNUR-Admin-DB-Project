<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use App\Models\Tipo_cuotas;
use Illuminate\Http\Request;
use SebastianBergmann\Environment\Console;

class CuotasController extends Controller
{

    public function index()
    {
        $tipo_cuota = DB::select('Execute SP_listar_cuotas');
        return View('cuotas')->with('tipo_cuota', $tipo_cuota);
    }

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
        $tipo = $request->get('tipo');
        $cantidad = $request->get('cantidad');
        $values = [$tipo, $cantidad];
        DB::insert("execute insertar_tipo_cuota ?,?", $values);
        return redirect('/cuotas')->with('success', 'se agregó la cuota');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Tipo_cuotas  $tipo_cuotas
     * @return \Illuminate\Http\Response
     */
    public function show(Tipo_cuotas $tipo_cuotas)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Tipo_cuotas  $tipo_cuotas
     * @return \Illuminate\Http\Response
     */
    public function edit(Tipo_cuotas $tipo_cuotas)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Tipo_cuotas  $tipo_cuotas
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tipo_cuotas $tipo_cuotas)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Tipo_cuotas  $tipo_cuotas
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::delete("execute eliminar_cuota ?", array($id));
        return redirect('/cuotas')->with('success', 'se eliminó la cuota');
    }
}
