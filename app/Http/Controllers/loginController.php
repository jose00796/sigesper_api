<?php

namespace App\Http\Controllers;

use App\Models\usuarios;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Str;

class loginController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */


    public function login(Request $request)
    {
        //Validamos el Request:
        $this->validate($request, [
            'login' => 'required',
            'pwd' => 'required',
        ]);

        //Consultamos el Usuario
        $user = usuarios::query()->where('login', $request->input('login'))->first();

        //Verificacion de Contraseña
        if (Crypt::decrypt($user->pwd) === $request->input('pwd')) {
            
            //Generar un string aleatorio para el api_token
            $api_token = Str::random(50);

            //Seteamos el api_token al Usuario
            $user->api_token = $api_token;

            //Guardamos
            $user->save();

            //Retornamos el api_token para futuras peticiones
            return response()->json(['status' => 'success','api_token' => $api_token]);
        }else{
            return response()->json(['status' => 'fail'], 401);
        }
    }

    public function logout(Request $request)
    {
        usuarios::where('api_token', $request->input('api_token'))->update(['api_token' => null]);
        return response()->json(['status' => 'success']);
    }

    //
}