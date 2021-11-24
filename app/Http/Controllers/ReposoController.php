<?php

namespace App\Http\Controllers;
use App\Models\reposos;
use Illuminate\Http\Request;

class reposoController extends Controller
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
        $data = reposos::all();

        return response()->json($data);
    }

    public function ver($id)
    {
        $data = new reposos();
        $datosEncontrados = $data->find($id);

        return response()->json($datosEncontrados);
    }

    public function guardar(Request $request)
    {
        $dataReposo = new reposos();

        $dataReposo->v_e = $request->v_e;
        $dataReposo->ced = $request->ced;
        $dataReposo->n_reposo = $request->n_reposo;
        $dataReposo->f_reposo = $request->f_reposo;
        $dataReposo->f_desde = $request->f_desde;
        $dataReposo->f_hasta = $request->f_hasta;
        $dataReposo->diagnostico = $request->diagnostico;
        $dataReposo->otros = $request->otros;

        $dataReposo->save();

        return response()->json($request);
    }

    public function eliminar($id)
    {
        $data = reposos::find($id);

        $data->delete();

        return response()->json("Registro Borrado");
    }

    public function actualizar(Request $request, $id)
    {
        $dataReposo = reposos::findOrFail($id);

        $dataReposo->v_e = $request->v_e;
        $dataReposo->ced = $request->ced;
        $dataReposo->n_reposo = $request->n_reposo;
        $dataReposo->f_reposo = $request->f_reposo;
        $dataReposo->f_desde = $request->f_desde;
        $dataReposo->f_hasta = $request->f_hasta;
        $dataReposo->diagnostico = $request->diagnostico;
        $dataReposo->otros = $request->otros;

        $dataReposo->save();

        return response()->json("Registro Actualizado");


    }

    //
}