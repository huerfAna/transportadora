<?php namespace App\Http\Controllers;

use App\Payment;
use App\Company;
use App\Customer;
use App\Provider;
use Input;
use Illuminate\Routing\Route;
use Illuminate\Http\Request;
use App\Http\Requests\PaymentRequest;

class PaymentController extends Controller {

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	

	public function __construct()
	{
		$this->empresas = Company::all();
		$this->beforeFilter('@findPayment', ['only' => ['edit','update']]);
	}
	public function findPayment(Route $route)
	{
		$this->contrarecibo = Payment::findOrFail($route->getParameter('contrarecibo'));
	}
	/**
	 * 
	 *
	 * @return Response
	 */
	public function index(Request $requestp)
	{
		$contrarecibos = Payment::search($requestp->get('buscar'))->paginate(10);
		$contrarecibos->setPath('contrarecibo');
		return view('administracion.show_payments',compact('contrarecibos'))->with('empresas',$this->empresas);
	}
	public function create()
	{
		$contrarecibo = '';
		$cliente = ["" => "Seleccione... "] + Customer::lists('rsocial','id') + Provider::lists('rsocial','id');
		$form_data = ['route' => 'contrarecibo.store', 'method' => 'POST', 'class'=>'form-horizontal'];
		return view('administracion.form_Payment', compact('contrarecibo','form_data','cliente'))->with('empresas',$this->empresas);
	}	
	public function store(PaymentRequest $request)
	{
		$contrarecibo = new Payment($request->all());
		$contrarecibo->save();
		
		return \Redirect::route('contrarecibo.index');
	}
	public function edit($id)
	{
		$contrarecibo = $this->contrarecibo;
		$cliente = ["" => "Seleccione... "] + Customer::lists('rsocial','id') + Provider::lists('rsocial','id');
		$form_data = ['route' => ['contrarecibo.update',$id], 'method' => 'PUT', 'class'=>'form-horizontal'];
		return view('administracion.form_payment', compact('contrarecibo','form_data','cliente'))->with('empresas',$this->empresas);
	}
	public function update(PaymentRequest $request, $id)
	{		
		$this->contrarecibo->fill($request->all());
		$this->contrarecibo->save();
		
		return \Redirect::route('contrarecibo.index');
	}
	
}
