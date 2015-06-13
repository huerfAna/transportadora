<?php namespace App\Http\Controllers;

use App\Company;
use Illuminate\Routing\Route;
use App\Http\Requests\CompanyRequest;

class CompanyController extends Controller {

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	protected $request;

	public function __construct()
	{
		//$this->request = $request;
		$this->beforeFilter('@findCompany', ['only' => ['edit','update']]);
	}
	public function findCompany(Route $route)
	{
		$this->empresa = Company::findOrFail($route->getParameter('empresa'));
	}
	/**
	 * Show the application welcome screen to the user.
	 *
	 * @return Response
	 */
	public function index()
	{
		$empresas = Company::all();
		return view('personal.show_companies',compact('empresas'));
	}
	public function create()
	{
		$empresa = '';
		$form_data = ['route' => 'empresa.store', 'method' => 'POST', 'class'=>'form-horizontal'];
		return view('personal.form_company',compact('empresa','form_data'));
	}
	public function store(CompanyRequest $request)
	{
		Company::create($request->all());
		//$empresa->save();
		$file = $request->file('image');
		if($file != '')
    	{
    		$fileName = $file->getClientOriginalName();
	    	$request->file('image')->move(public_path().'/img/logos', $fileName);
	    }		

		return \Redirect::route('empresa.index');
	}
	public function edit($id)
	{
		$empresa = $this->empresa;
		$form_data = ['route' => ['empresa.update', $empresa], 'method' => 'PUT', 'class'=>'form-horizontal'];
		
		return view('personal.form_company', compact('empresa','form_data'));
	}
	
	public function update(CompanyRequest $request, $id)
	{		
		$this->empresa->fill($request->all());
		$this->empresa->save();
		$file = $request->file('image');
		if($file != '')
    	{
    		$fileName = $file->getClientOriginalName();
	    	$request->file('image')->move(public_path().'/img/logos', $fileName);
	    }
	
		return \Redirect::route('empresa.index');
	}
}
