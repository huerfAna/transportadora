<?php namespace App\Http\Controllers;

use App\Receiver;
use App\Customer;
use Illuminate\Routing\Route;
use Illuminate\Http\Request;
use App\Http\Requests\ReceiverRequest;

class ReceiverController extends Controller {

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	

	public function __construct()
	{
		$this->beforeFilter('@findReceiver', ['only' => ['edit','update']]);
	}
	public function findReceiver(Route $route)
	{
		$this->destinatario = Receiver::findOrFail($route->getParameter('destinatario'));
	}


	/**
	 * Show the application welcome screen to the user.
	 *
	 * @return Response
	 */
	public function index(Request $requestp)
	{
		$destinatarios = Receiver::search($requestp->get('buscar'))->paginate(10);
		$destinatarios->setPath('destinatario');
		return view('administracion.show_Receivers',compact('destinatarios'));
	}
	public function create()
	{
		$destinatario = '';
		$cliente = ["" => "Seleccione... "] + Customer::lists('rsocial','id');
		$form_data = ['route' => 'destinatario.store', 'method' => 'POST', 'class'=>'form-horizontal'];
		return view('administracion.form_Receiver', compact('destinatario','form_data','cliente'));
	}	
	public function store(ReceiverRequest $request)
	{
		$destinatario = new Receiver($request->all());
		$destinatario->save();
		
		return \Redirect::route('destinatario.index');
	}
	public function edit($id)
	{
		$destinatario = $this->destinatario;
		$cliente = ["" => "Seleccione... "] + Customer::lists('rsocial','id');
		$form_data = ['route' => ['destinatario.update',$id], 'method' => 'PUT', 'class'=>'form-horizontal'];
		return view('administracion.form_Receiver', compact('destinatario','form_data','cliente'));
	}
	public function update(ReceiverRequest $request, $id)
	{		
		$this->destinatario->fill($request->all());
		$this->destinatario->save();
		
		return \Redirect::route('destinatario.index');
	}

}
