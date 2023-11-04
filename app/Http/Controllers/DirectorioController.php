<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Directorio;
use App\Models\Contacto;

class DirectorioController extends Controller
{
    public function index(){
        $entradas = Directorio::all();
        return view('directorio', compact('entradas'));
    }

    public function add(){
        return view('crearEntrada');
    }

    public function search(){
        return view('buscar');
    }

    public function delete($codigoEntrada){
        $entrada = Directorio::find($codigoEntrada);
        return view ('eliminar', compact('entrada'));
    }

    public function save(Request $req){
        $nuevaEntrada = new Directorio();
        $nuevaEntrada->codigoEntrada = $req->input('codigo');
        $nuevaEntrada->nombre = $req->input('nombre');
        $nuevaEntrada->apellido = $req->input('apellido');
        $nuevaEntrada->correo = $req->input('correo');
        $nuevaEntrada->telefono = $req->input('telefono');

        $nuevaEntrada->save();
        return  redirect()->route('directorio.inicio');
    }

    public function find(Request $req){
        $entrada = Directorio::where('correo', $req->input('correo'));
        $contactos = Contacto::all();
        if($entrada != null){
            return view ('vercontactos', compact('contactos'));
        }
    }

    public function destroy($codigoEntrada){
        $entrada = Directorio::find($codigoEntrada);
        $entrada->delete();
        return  redirect()->route('directorio.inicio');
    }
}
