<?php namespace App\Http\Requests;

use App\Http\Requests\Request;
use Illuminate\Routing\Route;

class UnitRequest extends Request {

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
			'unit_number'  => 'required|unique:units,unit_number,'.$this->route->getParameter('unidad'),
			'plates'       => 'required|max:20||unique:units,plates',
			'name'  	   => 'required|max:100',
			'description'  => 'required',
			'trademark'	   => 'max:100',
			'model' 	   => 'max:100',
			'type'         => 'max:20',
			'policy'	   => 'max:10',
			'asingle'      => 'integer',
			'adouble'      => 'integer',
			'provider'     => 'max:100'

		];
	}

}
