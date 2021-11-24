<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\vacaciones;
use App\Models\vacaciones as ModelsVacaciones;

class vacacionesController extends Controller{


    public function consultar()
    {
        $data = vacaciones::all();

        return response()->json($data);
    }

    public function ver($id)
    {
        $data = new vacaciones();
        $datosEncontrados = $data::find($id);

        return response()->json($datosEncontrados);
    }

    public function guardar(Request $request)
    {
        $dataVac = new vacaciones();

        $dataVac->v_e = $request->v_e;
        $dataVac->ced = $request->ced;
        $dataVac->f_inicio = $request->f_inicio;
        $dataVac->f_fin = $request->f_fin;
        $dataVac->periodo_vac = $request->periodo_vac;
        $dataVac->cant_periodo = $request->cant_periodo;
        $dataVac->descripcion = $request->descripcion;

        $dataVac->save();

        return response()->json($request);
    }

    public function eliminar($id)
    {
        $data = vacaciones::find($id);

        $data->delete();

        return response()->json("Registro Borrado");
    }

    public function actualizar(Request $request, $id)
    {
        $dataVac = vacaciones::FindOrFail($id);

        $dataVac->v_e = $request->v_e;
        $dataVac->ced = $request->ced;
        $dataVac->f_inicio = $request->f_inicio;
        $dataVac->f_fin = $request->f_fin;
        $dataVac->periodo_vac = $request->periodo_vac;
        $dataVac->cant_periodo = $request->cant_periodo;
        $dataVac->descripcion = $request->descripcion;

        $dataVac->save();

        return response()->json("Registro Actualizado");
    }
}