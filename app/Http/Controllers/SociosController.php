<?php

namespace App\Http\Controllers;

use App\Models\Socios;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SociosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $socios = DB::select('Execute listar_socios');
        return View('socios')->with('socios', $socios);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function createView()
    {
        $sedes = DB::select('select * from View_sede_socio');
        $cuotas = DB::select('select * from View_tipo_cuota_socio');
        return View('agregar_socio')->with('sedes', $sedes)->with('cuotas', $cuotas);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   $nombre= $request->get("nombre");
        $apellido1 = $request->get("apellido1");
        $apellido2 = $request->get("apellido2");
        $direccion = $request->get("direccion");
        $fecha_pago = $request->get("fecha_pago");
        $cuenta_bancaria = $request->get("cuanta_bancaria");
        $tipo_cuota_fk = $request->get("tipo_cuota_fk");
        $sede_fk = $request->get("sede_fk");
        $values = [$nombre, $apellido1, $apellido2, $direccion, $fecha_pago, $cuenta_bancaria, $tipo_cuota_fk, $sede_fk];
        
        DB::insert("execute insertar_socio ?,?,?,?,?,?,?,?", $values);
        return redirect('/socios')->with('success', 'se agregó el socio');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($socio_id)
    {
       $socio = DB::select('execute socio_por_id ?', array($socio_id));
       $sedes = DB::select('select * from View_sede_socio');
       $cuotas = DB::select('select * from View_tipo_cuota_socio');
       return View('editarSocio', compact('sedes','cuotas','socio'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $nombre= $request->get("nombre");
        $apellido1 = $request->get("apellido1");
        $apellido2 = $request->get("apellido2");
        $direccion = $request->get("direccion");
        $fecha_pago = $request->get("fecha_pago");
        $cuenta_bancaria = $request->get("cuanta_bancaria");
        $tipo_cuota_fk = $request->get("tipo_cuota_fk");
        $sede_fk = $request->get("sede_fk");
        $values = [$id, $nombre, $apellido1, $apellido2, $direccion, $fecha_pago, $cuenta_bancaria, $tipo_cuota_fk, $sede_fk];
        
        DB::update("execute actualizar_socio ?,?,?,?,?,?,?,?,?", $values);
        return redirect('/socios')->with('success', 'se actualizó el socio');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::delete("execute borrar_socio ?", array($id));
        return redirect('/socios')->with('success', 'se eliminó el socio');
    }
}
