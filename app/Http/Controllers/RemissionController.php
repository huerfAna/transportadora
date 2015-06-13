<?php namespace App\Http\Controllers;

use App\Remission;
use App\Customer;
use App\Employe;
use Illuminate\Routing\Route;
use Illuminate\Http\Request;
use App\Http\Requests\RemissionRequest;

class RemissionController extends Controller {

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	

	public function __construct()
	{
		$this->beforeFilter('@findRemission', ['only' => ['edit','update']]);
	}
	public function findRemission(Route $route)
	{
		$this->remision = Remission::findOrFail($route->getParameter('remision'));
	}
	/**
	 * 
	 *
	 * @return Response
	 */
	public function index(Request $requestp)
	{
		$remisiones = Remission::search($requestp->get('buscar'))->paginate(10);
		$remisiones->setPath('remision');
		return view('administracion.show_remissions',compact('remisiones'));
	}
	public function create()
	{
		$remision = '';
		$cliente = ["" => "Seleccione... "] + Customer::lists('rsocial','id');
		$chofer = ["" => "Seleccione... "] + Employe::where('type',2)->lists('name','id');
		$form_data = ['route' => 'remision.store', 'method' => 'POST', 'class'=>'form-horizontal'];
		return view('administracion.form_remission', compact('remision','form_data','cliente','chofer'));
	}	
	public function store(RemissionRequest $request)
	{
		$remision = new Remission($request->all());
		$remision->save();
		
		return \Redirect::route('remision.index');
	}
	public function edit($id)
	{
		$remision = $this->remision;
		$cliente = ["" => "Seleccione... "] + Customer::lists('rsocial','id');
		$chofer = ["" => "Seleccione... "] +  Employe::where('type',2)->lists('name','id');
		$form_data = ['route' => ['remision.update',$id], 'method' => 'PUT', 'class'=>'form-horizontal'];
		return view('administracion.form_remission', compact('remision','form_data','cliente','chofer'));
	}
	public function update(RemissionRequest $request, $id)
	{		
		$this->remision->fill($request->all());
		$this->remision->save();
		
		return \Redirect::route('remision.index');
	}
	public  function mostrar()
	{
	    if(Request::ajax()) {
	      $data = Input::all();
	      print_r($data);die;
	    }
	}

}
