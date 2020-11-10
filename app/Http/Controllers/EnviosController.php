<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Tipo_Envios;
use SebastianBergmann\Environment\Console;

class EnviosController extends Controller
{
    public function __construct(){
        
    }

    public function tipoEnvio(){
        $tipo_envio = DB::select('Execute sp_tipo_envios');
        return View('/envios.listar-tipo-envio')->with('tipo_envio', $tipo_envio);
    }

    public function createTipoEnv(){
        return view('envios.agregar-tipo-envio');
    }
    public function crearTipoEnvio(Request $request){
        $descripcion = $request->get('descripcion');
        $values = [$descripcion];
        DB::insert("execute insertar_tipo_envios ?", $values);
        return redirect('/tipo/envios')->with('success', 'se agregó el tipo de envio');
    }

    public function editarTipoEnv($id){
        $values = [$id];
        $tipo_envio = DB::select('Execute obtener_tipo_envio_by_id ?', $values);
        return view('envios.editar-tipo-envio')->with('tipo_envio', $tipo_envio);
    }
    public function actualizarTipoEnvio(Request $request){
        $idTipoEnv = $request->get('idTipoEnv');
        $descripcion = $request->get('descripcion');
        $values = [$idTipoEnv,$descripcion];
        DB::insert("execute editar_tipo_envios ?,?", $values);
        return redirect('/tipo/envios')->with('success', 'se agregó el tipo de envio');
    }

    public function eliminarTipoEnvio($id){
        $values = [$id];
        DB::insert("execute eliminar_tipo_envios ?", $values);
        return redirect('/tipo/envios')->with('success', 'se eliminó el tipo de envio');
    }

    public function listarProductos(){
        $productos = DB::select('Execute listar_productos');
        return View('/envios.listar-productos')->with('productos', $productos);
    }
    public function crearProductos(){
        $tipo_envio = DB::select('Execute sp_tipo_envios');
        return View('envios.agregar-producto')->with('tipo_envio', $tipo_envio);
    }
    public function agregarProducto(Request $request){
        // dd($request);
        $descripcion = $request->get('descripcion');
        $idTipoEnv = $request->get('idTipoEnv');
        $values = ['',$descripcion,$idTipoEnv];
        // dd($values);
        DB::insert("execute insertar_productos ?,?,?", $values);
        return redirect('/lista/productos')->with('success', 'se agregó producto');
    }

    public function editarProducto($id){
        $values = [$id];
        $producto = DB::select('Execute listar_productos_by_id ?', $values);
        $tipo_envio = DB::select('Execute sp_tipo_envios');
        return view('envios.editar-producto')->with('producto',$producto,'tipo_envio',$tipo_envio);
    }
    public function actualizarProducto(Request $request){
        dd($request);
    }
    public function eliminarProducto($id){
        $values = [$id];
        DB::insert("execute eliminar_producto ?", $values);
        return redirect('/lista/productos')->with('success', 'se eliminó el producto');
    }
}