<?php

namespace App\Http\Controllers;

use App\Models\voluntariosH;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class VoluntariosHController extends Controller
{
    public function createView()
    {
        $voluntarios = DB::select('select * from View_voluntario_Admin');
        return View('agregarVoluntarioH')->with('voluntarios', $voluntarios);
    }

    public function store(Request $request)
    {
        
        $profesion= $request->get("profesion");
        $disponibilidad= $request->get("disponibilidad");
        $cantidad_de_trabajos = $request->get("cantidad_de_trabajos");
        $voluntario_fk = $request->get("voluntario_fk");
        
        $values = [$profesion, $disponibilidad, $cantidad_de_trabajos, $voluntario_fk];
        
        DB::insert("Execute InsertarVoluntarios_H ?,?,?,?", $values);
        return redirect('/voluntariosH')->with('succes', 'Se agregó el voluntario');
    }

    public function index()
    {
        $voluntariosH = DB::select('Execute ListadoVoluntarios_H');
        return View('voluntariosH')->with('voluntariosH', $voluntariosH);
    }

    public function edit($id)
    {
        
    }

    public function update(Request $request, $id)
    {

        
    }

    public function destroy($id)
    {
        DB::delete("execute EliminarVoluntarios_H ?", array($id));
        return redirect('/voluntariosH')->with('success', 'se eliminó el voluntario');
    }
}
