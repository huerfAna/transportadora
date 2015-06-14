<?php namespace App\Http\Controllers;

use App\DetRemission;
use App\Company;
use Input;
use Illuminate\Routing\Route;
use Illuminate\Http\Request;
use App\Http\Requests\DetRemissionRequest;

class DetRemissionController extends Controller {

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	

	public function __construct()
	{
		$this->empresas = Company::all();		
	}
	/**
	 * 
	 *
	 * @return Response
	 */
	
	public function store(DetRemissionRequest $request)
	{
		$remision = new DetRemission($request->all());
		$remision->save();
		
		return \Redirect::back();
	}
	
	
}
