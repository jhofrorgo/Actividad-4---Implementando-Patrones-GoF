<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pais; // con esto se indica que modelo se va a usar 

class PaisController extends Controller
{

    public function index()// trae información de la base de datos
    {
        $pais = Pais::all();  //aca estamos llamando al modelo y le estoy indicando que todos los campos se guarden en la variable $pais y que se guarden todos los campos de la tabla

        return view('pais.index', compact('pais'));
        /*esta es la variable $pais*/ // es el nombre de la carpeta + el nombre de la vista, el return envia a la vista
    }


    public function crear(Request $request) // se usa para capturar la información de los textbox
    {
        return view('pais.crear');
    }
    public function guardar(Request $request) // se usa cuando se va a almacenar información 
    {
        $pais = new Pais();
        $pais->nombre = $request->nombre;

        $pais->save();

        return redirect('pais');
    }


    public function ver($id) 
    {
        $pais = Pais::find($id);
        return view('pais.ver',compact('pais'));
    }



    public function actualizar($id) 
    {
        $pais = Pais::find($id);
        return view('pais.actualizar',compact('pais'));
    }

    public function guardaractualizar(Request $request) // se usa cuando se va a almacenar información 
    {
        $pais = Pais::find($request->id);
        $pais->nombre = $request->nombre;
        $pais->update();
        return redirect('pais');
    }

    public function eliminar($id) // eliminar no usar 
    {
        $pais = Pais::find($id);
        $pais->delete();
        return redirect('pais');
    }
}
