<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contacto;

class ContactoController extends Controller
{
    public function index(){
        $contactos = Contacto::all();
        return view ('vercontactos', compact('contactos'));
    }

    public function add(){
        return view('agregarcontacto');
    }

    public function save(Request $req){
        $nuevoContacto = new Contacto();
        $nuevoContacto->nombre = $req->input('nombre');
        $nuevoContacto->apellido = $req->input('apellido');
        $nuevoContacto->telefono = $req->input('telefono');

        $nuevoContacto->save();
        return redirect()->route('contacto.inicio');
    }

    public function destroy($id){
        $contacto = Contacto::find($id);
        $contacto->delete();
        return  redirect()->route('contacto.inicio');
    }
}
