<?php namespace App\Http\Controllers;

use App\Tow;
use Illuminate\Routing\Route;
use Illuminate\Http\Request;
use App\Http\Requests\TowRequest;

class TowController extends Controller {

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		$this->beforeFilter('@findTow', ['only' => ['edit','update']]);
	}
	public function findTow(Route $route)
	{
		$this->remolque = Tow::findOrFail($route->getParameter('remolque'));
	}


	/**
	 * Show the application welcome screen to the user.
	 *
	 * @return Response
	 */
	public function index(Request $requestp)
	{
		$remolques = Tow::search($requestp->get('buscar'))->paginate(10);
		$remolques->setPath('remolque');
		return view('mantenimiento.show_tows',compact('remolques'));
	}
	public function create()
	{
		$remolque = '';
		$form_data = ['route' => 'remolque.store', 'method' => 'POST', 'class'=>'form-horizontal'];
		return view('mantenimiento.form_tow', compact('remolque','form_data'));
	}	
	public function store(TowRequest $request)
	{
		$remolque = new Tow($request->all());
		$remolque->save();
		
		return \Redirect::route('remolque.index');
	}
	public function edit($id)
	{
		$remolque = $this->remolque;
		$form_data = ['route' => ['remolque.update',$id], 'method' => 'PUT', 'class'=>'form-horizontal'];
		return view('mantenimiento.form_tow', compact('remolque','form_data'));
	}
	public function update(TowRequest $request, $id)
	{		
		$this->remolque->fill($request->all());
		$this->remolque->save();
		
		return \Redirect::route('remolque.index');
	}


}
