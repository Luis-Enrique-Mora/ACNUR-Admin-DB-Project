<?php

namespace App\Http\Controllers;

use App\Models\Tipo_voluntarios;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TipoVoluntarioController extends Controller
{
    
    public function create()
    {
       
    }

    public function store(Request $request)
    {
        $tipo = $request->get('tipo');
        $values = [$tipo];
        DB::insert("execute SP_Insertar_tipo_vol ?", $values);
        return redirect('/tipoVoluntarios')->with('success', 'se agregó el tipo');
    }

    public function index()
    {
        $tipo_voluntario = DB::select('Execute SP_ListadoTipoVoluntarios');
        return View('tipoVoluntarios')->with('voluntarios', $tipo_voluntario);
    }

    public function edit($id)
    {
        
    }

    public function update(Request $request, $id)
    {

        
    }

    public function destroy($id)
    {
        DB::delete("execute SP_Eliminar_tipo_vol ?", array($id));
        return redirect('/tipoVoluntarios')->with('success', 'se eliminó el tipo');
    }
}
