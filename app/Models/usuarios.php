<?php

namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Contracts\Auth\Access\Authorizable as AuthorizableContract;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Lumen\Auth\Authorizable;

class usuarios extends Model implements AuthenticatableContract, AuthorizableContract
{
    use Authenticatable, Authorizable, HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $connection = 'pgsql_2';
    protected $table = 'usuarios';

    protected $fillable = [
        'ced', 'nombres', 'apellidos', 'cargo', 'id_rep', 'id_subdep', 'email', 'login', 'pwd', 'v_e', 'pwd_md5',
        'codigo_ch', 'id_sit_lab', 'tipo_clave', 'id_perfil', 'f_ingreso', 'sexo', 'ult_login', 'api_token', 'remember_token'
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [
        'pwd',
    ];
}
