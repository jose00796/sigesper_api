<?php

namespace App\Http\Controllers;
use App\Models\usuarios;

class usuariosController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    public function __construct()
    {
        //
    }

    public function consultar()
    {
        $data = usuarios::all();
        //$data->setConnection('pgsql_2');

        //$prueba = $data->find(1);
        return response()->json($data);
    }

    public function ver($id)
    {
        $data = new usuarios;
        $datosEncontrados = $data->find($id);

        return response()->json($datosEncontrados);
    }

    public function eliminar($id)
    {
        $data = usuarios::find($id);

        $data->delete();

        return response()->json('Usuario Eliminado');   
    }

    //
}