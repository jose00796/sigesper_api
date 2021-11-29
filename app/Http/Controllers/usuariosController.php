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

    //
}