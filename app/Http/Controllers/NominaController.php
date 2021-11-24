<?php

namespace App\Http\Controllers;
use App\Models\nominas;
use Illuminate\Http\Request;

class nominaController extends Controller
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
        $data = nominas::all();

        return response()->json($data);
    }

    public function ver($id)
    {
        $data = new nominas();

        $datosEncontrados = $data->find($id);

        return response()->json($datosEncontrados);
    }

    public function guardar(Request $request)
    {
        $dataNomina = new nominas();

        $dataNomina->v_e = $request->v_e;
        $dataNomina->ced = $request->ced;
        $dataNomina->nombres = $request->nombres;
        $dataNomina->apellidos = $request->apellidos;
        $dataNomina->f_ingreso = $request->f_ingreso;
        $dataNomina->f_nac = $request->f_nac;
        $dataNomina->ult_periodo_vac = $request->ult_periodo_vac;
        $dataNomina->periodo_vac = $request->periodo_vac;
        $dataNomina->años_cne = $request->años_cne;
        $dataNomina->años_apn = $request->años_apn;
        $dataNomina->telf = $request->telf;
        $dataNomina->email = $request->email;
        $dataNomina->dic_habitacion = $request->dic_habitacion;
        $dataNomina->cargo = $request->cargo;
        $dataNomina->unidad_adscripcion = $request->unidad_adscripcion;

        $dataNomina->save();

        return response()->json($request);
    }

    public function eliminar($id)
    {
        $data = nominas::find($id);

        $data->delete();

        return response()->json("Registro Borrado");
    }

    public function actualizar(Request $request, $id)
    {
        $dataNomina = nominas::findOrFail($id);

        $dataNomina->v_e = $request->v_e;
        $dataNomina->ced = $request->ced;
        $dataNomina->nombres = $request->nombres;
        $dataNomina->apellidos = $request->apellidos;
        $dataNomina->f_ingreso = $request->f_ingreso;
        $dataNomina->f_nac = $request->f_nac;
        $dataNomina->ult_periodo_vac = $request->ult_periodo_vac;
        $dataNomina->periodo_vac = $request->periodo_vac;
        $dataNomina->años_cne = $request->años_cne;
        $dataNomina->años_apn = $request->años_apn;
        $dataNomina->telf = $request->telf;
        $dataNomina->email = $request->email;
        $dataNomina->dic_habitacion = $request->dic_habitacion;
        $dataNomina->cargo = $request->cargo;
        $dataNomina->unidad_adscripcion = $request->unidad_adscripcion;

        $dataNomina->save();

        return response()->json("Registro Actualizado");
    }

    //
}