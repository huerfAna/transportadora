<?php namespace App\Http\Controllers;

use App\Road;
use App\Company;
use Illuminate\Routing\Route;
use Illuminate\Http\Request;
use App\Http\Requests\RoadRequest;

class RoadController extends Controller {

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		$this->empresas = Company::all();
		$this->beforeFilter('@findRoad', ['only' => ['edit','update']]);
	}
	public function findRoad(Route $route)
	{
		$this->ruta = Road::findOrFail($route->getParameter('ruta'));
	}


	/**
	 * Show the application welcome screen to the user.
	 *
	 * @return Response
	 */
	public function index(Request $requestp)
	{
		$rutas = Road::search($requestp->get('buscar'))->paginate(10);
		$rutas->setPath('ruta');
		return view('mantenimiento.show_roads',compact('rutas'))->with('empresas',$this->empresas);
	}
	public function create()
	{
		$ruta = '';
		$form_data = ['route' => 'ruta.store', 'method' => 'POST', 'class'=>'form-horizontal'];
		return view('mantenimiento.form_road', compact('ruta','form_data'))->with('empresas',$this->empresas);
	}	
	public function store(RoadRequest $request)
	{
		$ruta = new Road($request->all());
		$ruta->save();
		
		return \Redirect::route('ruta.index');
	}
	public function edit($id)
	{
		$ruta = $this->ruta;
		$form_data = ['route' => ['ruta.update',$id], 'method' => 'PUT', 'class'=>'form-horizontal'];
		return view('mantenimiento.form_Road', compact('ruta','form_data'))->with('empresas',$this->empresas);
	}
	public function update(RoadRequest $request, $id)
	{		
		$this->ruta->fill($request->all());
		$this->ruta->save();
		
		return \Redirect::route('ruta.index');
	}


}
