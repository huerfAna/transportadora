<?php namespace App\Http\Controllers;

use App\Employe;
use App\Unit;
use App\Company;
use Illuminate\Routing\Route;
use Illuminate\Http\Request;
use App\Http\Requests\EmployeRequest;


class EmployeController extends Controller {


	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	protected $request;

	public function __construct()
	{
		$this->empresas = Company::all();
		$this->beforeFilter('@findEmploye', ['only' => ['edit','update']]);
	}
	public function findEmploye(Route $route)
	{
		$this->empleado = Employe::findOrFail($route->getParameter('empleado'));
	}

	/**
	 * Show the application welcome screen to the user.
	 *
	 * @return Response
	 */
	public function index(Request $requestp)
	{
		$empleados = Employe::filterAndPaginate($requestp->get('buscar'),$requestp->get('tipo'));
		$empleados->setPath('empleado');
		
		return view('personal.show_employees',compact('empleados'))->with('empresas',$this->empresas);
	}
	public function create()
	{
		$empleado = '';
		$unidad = [0 => "Seleccione... "] + Unit::lists('unit_number','id');
		$form_data = ['route' => 'empleado.store', 'method' => 'POST', 'class'=>'form-horizontal'];

		return view('personal.form_employe', compact('empleado','form_data','unidad'))->with('empresas',$this->empresas);
	}
	public function store(EmployeRequest $request)
	{
		Employe::create($request->all());		
		$file = $request->file('photo');
		if($file != '')
		{
    		$fileName = $file->getClientOriginalName();
	    	$request->file('photo')->move(public_path().'/img/fotos', $fileName);
	    }
	  	
	  	return \Redirect::route('empleado.index');
	}
	public function edit($id)
	{	
		$empleado = $this->empleado;
		$unidad = [0 => "Seleccione... "] + Unit::lists('unit_number','id');
		$form_data = ['route' => ['empleado.update',$id], 'method' => 'PUT', 'class'=>'form-horizontal'];
		
		return view('personal.form_employe', compact('empleado','form_data','unidad'))->with('empresas',$this->empresas);
	}
	
	public function update(EmployeRequest $request,$id)
	{				
		$this->empleado->fill($request->all());
		$this->empleado->save();
		$file = $request->file('photo');
		if($file != '')
		{
    		$fileName = $file->getClientOriginalName();
	    	$request->file('photo')->move(public_path().'/img/fotos', $fileName);
	    }

		return \Redirect::route('empleado.index');
	}



}
