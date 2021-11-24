<?php   
namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Contracts\Auth\Access\Authorizable as AuthorizableContract;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Lumen\Auth\Authorizable;

class vacaciones extends Model{
    protected $table = "vacaciones";

     protected $fillable = [
         'v_e', 'ced', 'f_inicio', 'f_fin', 'periodo_vac', 'cant_periodo', 'descripcion',
     ];

    // public $timestamps = false;
}