<?php

/** @var \Laravel\Lumen\Routing\Router $router */


/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$router->get('/', ['middleware' => ['auth']], function () use ($router) {
    return $router->app->version();
});

$router->get('/key', function(){
    return \Illuminate\Support\Str::random(32);
});

//LOGIN
$router->post('login', 'loginController@login');

//USUARIOS
$router->get('consultar-user', 'usuariosController@consultar');
$router->get('buscar-user/{id}', 'usuariosController@ver');
$router->post('registrar', 'registerController@register');
$router->delete('eliminar-user/{id}', 'usuariosController@eliminar');

//NOMINA
$router->get('consultar-nomina', 'NominaController@consultar');
$router->get('buscar-nomina/{id}', 'NominaController@ver');
$router->post('insertar-nomina', 'NominaController@guardar');
$router->delete('eliminar-nomina/{id}', 'NominaController@eliminar');
$router->put('actualizar-nomina/{id}', 'NominaController@actualizar');

//REPOSOS
$router->get('consultar-reposo', 'reposoController@consultar');
$router->get('buscar-reposo/{id}', 'reposoController@ver');
$router->post('insertar-reposo', 'reposoController@guardar');
$router->delete('eliminar-reposo/{id}', 'reposoController@eliminar');
$router->put('actualizar-reposo/{id}', 'reposoController@actualizar');

//VACACIONES
$router->get('consultar-vac', 'vacacionesController@consultar');
$router->get('buscar-vac/{id}', 'vacacionesController@ver');
$router->post('insertar-vac', 'vacacionesController@guardar');
$router->delete('eliminar-vac/{id}', 'vacacionesController@eliminar');
$router->put('actualizar-vac/{id}', 'vacacionesController@actualizar');

$router->group(['middleware' => 'auth'], function() use ($router){

    // Aqui van todas las rutas que necesitan estar autenticadas para el acceso
    $router->post('logout', 'loginController@logout');

});