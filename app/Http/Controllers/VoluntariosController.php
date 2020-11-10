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
        return View('agregarVoluntario')->with('sedes', $sedes);
    }

    public function store(Request $request)
    {
        $cedula= $request->get("cedula");
        $nombre= $request->get("nombre");
        $apellido1 = $request->get("apellido1");
        $apellido2 = $request->get("apellido2");
        $sede_fk = $request->get("sede_fk");
        $values = [$cedula, $nombre, $apellido1, $apellido2, $sede_fk];
        
        DB::insert("Execute SP_InsertarVoluntarios ?,?,?,?,?", $values);
        return redirect('/voluntarios')->with('succes', 'Se agregó el voluntario');
    }

    public function index()
    {
        $voluntarios = DB::select('Execute SP_ListadoVoluntarios');
        return View('voluntarios')->with('voluntarios', $voluntarios);
    }

    public function edit($id)
    {
        
    }

    public function update(Request $request, $id)
    {

        
    }

    public function destroy($id)
    {
        DB::delete("execute SP_EliminarVoluntarios ?", array($id));
        return redirect('/voluntarios')->with('success', 'se eliminó el voluntario');
    }
}
