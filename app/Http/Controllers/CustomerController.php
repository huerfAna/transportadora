<?php namespace App\Http\Controllers;

use App\Customer;
use App\Company;
use Session;
use Illuminate\Routing\Route;
use Illuminate\Http\Request;
use App\Http\Requests\CustomerRequest;

class CustomerController extends Controller {

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */

	public function __construct()
	{
		$this->empresas = Company::all();
		$this->beforeFilter('@findCustomer', ['only' => ['edit','update']]);
	}
	public function findCustomer(Route $route)
	{
		$this->cliente = Customer::findOrFail($route->getParameter('cliente'));
	}

	/**
	 * Show the application welcome screen to the user.
	 *
	 * @return Response
	 */
	public function index(Request $requestp)
	{		
		$clientes = Customer::search($requestp->get('buscar'));
		$clientes->setPath('cliente');
		return view('administracion.show_customers',compact('clientes'))->with('empresas',$this->empresas);
	}
	public function create()
	{
		$cliente = '';
		$form_data = ['route' => 'cliente.store', 'method' => 'POST', 'class'=>'form-horizontal'];
		return view('administracion.form_customer', compact('cliente','form_data'))->with('empresas',$this->empresas);
	}	
	public function store(CustomerRequest $request)
	{
		$cliente = new Customer($request->all());
		$cliente->save();
		
		return \Redirect::route('cliente.index');
	}
	public function edit($id)
	{
		$cliente = $this->cliente;
		$form_data = ['route' => ['cliente.update',$id], 'method' => 'PUT', 'class'=>'form-horizontal'];
		return view('administracion.form_customer', compact('cliente','form_data'))->with('empresas',$this->empresas);
	}
	public function update(CustomerRequest $request, $id)
	{		
		$this->cliente->fill($request->all());
		$this->cliente->save();
		
		return \Redirect::route('cliente.index');
	}

}
