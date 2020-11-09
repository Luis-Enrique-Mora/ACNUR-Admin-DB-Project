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
        $vol = DB::select('Execute SP_InsertarVoluntario');
        return redirect('/voluntarios')->with('voluntarios', $vol);
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

        $vol = DB::select('Execute SP_ActualizarVoluntarios');
        return redirect('/voluntarios/')->with('voluntarios', $vol);
    }

    public function destroy($id)
    {
        $vol = DB::select('Execute SP_EliminarVoluntarios');
        return redirect('/voluntarios/')->with('success','Registro eliminado exitosamente');
    }
}
