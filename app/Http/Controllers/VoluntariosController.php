<?php

namespace App\Http\Controllers;

use App\Models\voluntarios;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class VoluntariosController extends Controller
{
    public function createView()
    {
        $sedes = DB::select('select * from View_sede_voluntario');
        $tipovol = DB::select('select * from View_tipo_voluntario');
        return View('agregarVoluntario')->with('sedes', $sedes)->with('tipovol', $tipovol);
    }

    public function store(Request $request)
    {
        $cedula= $request->get("cedula");
        $nombre= $request->get("nombre");
        $apellido1 = $request->get("apellido1");
        $apellido2 = $request->get("apellido2");
        $profesion = $request->get("profesion ");
        $disponibilidad  = $request->get("disponibilidad ");
        $cantidad_de_trabajos  = $request->get("cantidad_de_trabajos ");
        $tipovol_fk = $request->get("tipovol_fk");
        $sede_fk = $request->get("sede_fk");
        $values = [$cedula, $nombre, $apellido1, $apellido2, $profesion, $disponibilidad, $cantidad_de_trabajos, $tipovol_fk, $sede_fk];
        
        DB::insert("Execute SP_InsertarVoluntarios' ?,?,?,?,?,?,?,?,?", $values);
        return redirect('/agregarVoluntario')->with('succes', 'Se agregó el voluntario');
    }

    public function index()
    {
        $vol = DB::select('Execute SP_ListadoVoluntarios');
        return View('/voluntarios')->with('voluntarios', $vol);
    }

    public function edit($id)
    {
        
    }

    public function update(Request $request, $id)
    {

        
    }

    public function destroy($id)
    {
        
    }
}
