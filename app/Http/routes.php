<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'WelcomeController@index');

Route::get('home', 'HomeController@index');


Route::get('/directorio', function(){
	return  View::make('administracion.directory');
});



Route::controllers([
	'auth'         => 'Auth\AuthController',
	//'empresa'      => 'CompanyController',	
]);
Route::get('exportar', 'UnitController@exportar');
Route::post('remision/select', 'RemissionController@mostrar');

Route::resource('empresa','CompanyController');
Route::resource('empleado','EmployeController');
Route::resource('proveedor','ProviderController');
Route::resource('cliente','CustomerController');
Route::resource('destinatario','ReceiverController');
Route::resource('unidad','UnitController');
Route::resource('remolque','TowController');
Route::resource('remision','RemissionController');
Route::resource('detalle','DetRemissionController');
Route::resource('ruta','RoadController');
Route::resource('contrarecibo','PaymentController');


/*
'password'     => 'Auth\PasswordController',
	
	'empleado'     => 'EmpleadoController',
	'cliente'      => 'ClienteController',
	'proveedor'    => 'ProveedorController',
	'destinatario' => 'DestinatarioController',
	'unidad' 	   => 'UnidadController',
	'remolque'     => 'RemolqueController',*/
