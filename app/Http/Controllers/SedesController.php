<?php

namespace App\Http\Controllers;

use Doctrine\DBAL\Schema\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SedesController extends Controller
{
    public function index()
    {
        $sedes = DB::select('execute SP_listar_sedes');
        return View('sedes')->with('sedes', $sedes);
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
        $tipo = $request->get('nombre_sede');
        $domicilio = $request->get('domicilio');
        $nombre_director = $request->get('nombre_director');
        $apellido1 = $request->get('apellido1');
        $apellido2 = $request->get('apellido2');
        $values = [$tipo, $domicilio, $nombre_director, $apellido1, $apellido2];
        DB::insert("execute insertar_sede ?,?,?,?,?", $values);
        return redirect('/sedes')->with('success', 'se agregó la sede');
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
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::delete("execute eliminar_sede ?", array($id));
        return redirect('/sedes')->with('success', 'se eliminó la sede');
    }
}
