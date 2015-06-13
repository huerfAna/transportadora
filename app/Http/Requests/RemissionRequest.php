<?php namespace App\Http\Requests;

use App\Http\Requests\Request;
use Illuminate\Routing\Route;

class RemissionRequest extends Request {

	/**
	 * Determine if the user is authorized to make this request.
	 *
	 * @return bool
	 */
	private $route;

	public function __construct(Route $route)
	{
		$this->route = $route;
	}
	public function authorize()
	{
		return true;
	}


	/**
	 * Get the validation rules that apply to the request.
	 *
	 * @return array
	 */
	public function rules()
	{
		//dd($this->);
		return [
			'folio'     => 'required|unique:remissions,folio,'.$this->route->getParameter('remision'),	
			'date'      => 'required|date',
			'customer'  => 'required|exists:customers,id',
			'receiver'  => 'required|exists:receivers,id',
			'driver' 	=> 'required|exists:drivers,id',
			'observation'  => 'max:400'
		];
	}

}
