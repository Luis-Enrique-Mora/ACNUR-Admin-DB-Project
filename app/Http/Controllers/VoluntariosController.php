<?php

namespace App\Http\Controllers;

use App\Models\voluntarios;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class VoluntariosController extends Controller
{
    public function create()
    { 
        return view('voluntarios.create');
    }

    public function store(Request $request)
    {
        $cedula= $request->get("cedula");
        $nombre= $request->get("nombre");
        $apellido1 = $request->get("apellido1");
        $apellido2 = $request->get("apellido2");
        $sede_fk = $request->get("sede_fk");
        $values = [$cedula, $nombre, $apellido1, $apellido2, $sede_fk];
        
        DB::insert("Execute SP_InsertarVoluntarios' ?,?,?,?,?", $values);
        return redirect('/voluntarios')->with('voluntarios', 'Se agregó el voluntario');
    }

    public function index()
    {
        $vol = DB::select('Execute SP_ListadoVoluntarios');
        return View('voluntarios.index')->with('voluntarios', $vol);
    }

    public function edit($id)
    {
        $vol = voluntarios::find($id);
        return view('voluntarios.edit',compact('vol','id'));
    }

    public function update(Request $request, $id)
    {

        DB::update('Execute SP_ActualizarVoluntarios');
        return redirect('/voluntarios/')->with('voluntarios', 'Se actualizo el voluntario');
    }

    public function destroy($id)
    {
        $vol = DB::select('Execute SP_EliminarVoluntarios');
        return redirect('/voluntarios/')->with('success','Se elimino el voluntario');
    }
}
