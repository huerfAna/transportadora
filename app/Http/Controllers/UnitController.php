<?php namespace App\Http\Controllers;

use App\Unit;
use App\Company;
use Response;
use Illuminate\Routing\Route;
use Illuminate\Http\Request;
use App\Http\Requests\UnitRequest;

class UnitController extends Controller {

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		$this->empresas = Company::all();
		$this->beforeFilter('@findUnit', ['only' => ['edit','update']]);
	}
	public function findUnit(Route $route)
	{
		$this->unidad = Unit::findOrFail($route->getParameter('unidad'));
	}

	/**
	 * Show the application welcome screen to the user.
	 *
	 * @return Response
	 */
	public function index(Request $requestp)
	{
		$unidades = Unit::search($requestp->get('buscar'))->paginate(10);
		$unidades->setPath('unidad');
		return view('mantenimiento.show_units',compact('unidades'))->with('empresas',$this->empresas);
	}
	public function create()
	{
		$unidad = '';
		$form_data = ['route' => 'unidad.store', 'method' => 'POST', 'class'=>'form-horizontal'];
		return view('mantenimiento.form_unit', compact('unidad','form_data'))->with('empresas',$this->empresas);
	}	
	public function store(UnitRequest $request)
	{
		$unidad = new Unit($request->all());
		$unidad->save();
		
		return \Redirect::route('unidad.index');
	}
	public function edit($id)
	{
		$unidad = $this->unidad;
		$form_data = ['route' => ['unidad.update',$id], 'method' => 'PUT', 'class'=>'form-horizontal'];
		return view('mantenimiento.form_unit', compact('unidad','form_data'))->with('empresas',$this->empresas);
	}
	public function update(UnitRequest $request, $id)
	{		
		$this->unidad->fill($request->all());
		$this->unidad->save();
		
		return \Redirect::route('unidad.index');
	}
	public function exportar(Request $requestp) 
	{
		$table = Unit::search($requestp->get('buscar'))->paginate(10);
		$output = implode(",", ['#', 'NUMERO', 'PLACAS', 'NOMBRE','DESCRIPCION','MARCA','MODELO','TIPO','POLIZA','EJE SIMPLE','EJE DOBLE','PROVEEDOR']);
		$output .= "\n";

	    foreach ($table as $row) {
	        $output .=  implode(",",$row->toArray());
	    }
	    $headers = array(
	        'Content-Type' => 'text/csv',
	        'Content-Disposition' => 'attachment; filename="Unidades.csv"',
	    );
	 
	    return Response::make(rtrim($output, "\n"), 200, $headers);
	}

}