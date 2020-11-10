<?php

namespace App\Http\Controllers;

use App\Models\voluntariosA;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class VoluntariosAController extends Controller
{
    public function createView()
    {
        $voluntarios = DB::select('select * from View_voluntario_Admin');
        return View('agregarVoluntarioA')->with('voluntarios', $voluntarios);
    }

    public function store(Request $request)
    {
    
        $voluntario_fk = $request->get("voluntario_fk");
        $values = [$voluntario_fk];
        
        DB::insert("Execute InsertarVoluntarios_A ?", $values);
        return redirect('/voluntariosA')->with('succes', 'Se agregó el voluntario');
       
    }

    public function index()
    {
        $voluntariosA = DB::select('Execute ListadoVoluntarios_A');
        return View('/voluntariosA')->with('voluntariosA', $voluntariosA);
    }

    public function edit($id)
    {
        
    }

    public function update(Request $request, $id)
    {

        
    }

    public function destroy($id)
    {
        DB::delete("execute EliminarVoluntarios_A ?", array($id));
        return redirect('/voluntariosA')->with('success', 'se eliminó el voluntario');
    }
}
