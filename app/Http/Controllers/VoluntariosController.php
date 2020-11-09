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
        $volind = new voluntarios();
        $volind->Nombre = $request->get('Nombre');
        $volind->cedula = $request->get('cedula');
        $volind->apellido1 = $request->get('Apellido1');
        $volind->apellido2 = $request->get('Apellido2');
        $volind->save();
        return redirect('/voluntarios')->with('success', 'voluntariado has been successfully added');
    }

    public function index()
    {
        $vol = voluntarios::all();
        return view('voluntarios.index',compact('vol'));
    }

    public function edit($id)
    {
        $vol = voluntarios::find($id);
        return view('voluntarios.edit',compact('vol','id'));
    }

    public function update(Request $request, $id)
    {

        DB::table('voluntarios')
        ->where('id', $id)
        ->update(['Nombre' => $request->get('Nombre'),
        'Apellido1' => $request->get('Apellido1'),
        'Apellido2' => $request->get('Apellido2')]);
        return redirect('/voluntarios/')->with('success', 'voluntariado has been successfully update');
    }

    public function destroy($id)
    {
        DB::table('voluntarios')->where('id', $id)->delete();
        return redirect('/voluntarios/')->with('success','Registro eliminado exitosamente');
    }
}
