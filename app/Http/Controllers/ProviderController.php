<?php namespace App\Http\Controllers;

use App\Provider;
use App\Company;
use Session;
use Illuminate\Routing\Route;
use Illuminate\Http\Request;
use App\Http\Requests\ProviderRequest;

class ProviderController extends Controller {

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	

	public function __construct()
	{
		$this->empresas = Company::all();
		$this->beforeFilter('@findProvider', ['only' => ['edit','update']]);
	}
	public function findProvider(Route $route)
	{
		$this->proveedor = Provider::findOrFail($route->getParameter('proveedor'));
	}


	/**
	 * Show the application welcome screen to the user.
	 *
	 * @return Response
	 */
	public function index(Request $requestp)
	{
		$proveedores = Provider::search($requestp->get('buscar'))->paginate(10);
		$proveedores->setPath('proveedor');
		return view('administracion.show_providers',compact('proveedores'))->with('empresas',$this->empresas);
	}
	public function create()
	{
		$proveedor = '';
		$form_data = ['route' => 'proveedor.store', 'method' => 'POST', 'class'=>'form-horizontal'];
		return view('administracion.form_provider', compact('proveedor','form_data'))->with('empresas',$this->empresas);
	}	
	public function store(ProviderRequest $request)
	{
		$proveedor = new Provider($request->all());
		$proveedor->save();
		
		return \Redirect::route('proveedor.index');
	}
	public function edit($id)
	{
		$proveedor = $this->proveedor;
		$form_data = ['route' => ['proveedor.update',$id], 'method' => 'PUT', 'class'=>'form-horizontal'];
		return view('administracion.form_provider', compact('proveedor','form_data'))->with('empresas',$this->empresas);
	}
	public function update(ProviderRequest $request, $id)
	{		
		$this->proveedor->fill($request->all());
		$this->proveedor->save();
		
		return \Redirect::route('proveedor.index');
	}

}
