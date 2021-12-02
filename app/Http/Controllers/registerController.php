<?php

namespace App\Http\Controllers;
use App\Models\usuarios;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;

class registerController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function register(Request $request)
    {
        $data = $request->all();

        $this->validate($request, [
            'ced' => 'required',
            'nombres' => 'required',
            'apellidos' => 'required',
            'cargo' => 'required',
            'id_dep' => 'required',
            'id_subdep' => 'required',
            'email' => 'required',
            'login' => 'required',
            'pwd' => 'required',
            'v_e' => 'required',
            'pwd_md5' => 'required',
            'codigo_ch' => 'required',
            'id_sit_lab' => 'required',
            'tipo_clave' => 'required',
            'id_perfil' => 'required',
            'f_ingreso' => 'required',
            'sexo' => 'required',
            'ult_login' => 'required',
        ]);

        //Ciframos el Password
        $data['pwd'] = Crypt::encrypt($data['pwd']);

        //Creamos en usuario
        $user = usuarios::create($data);
        return response()->json(['status' => 'success', 'data' => $user]);
    }

    //
}