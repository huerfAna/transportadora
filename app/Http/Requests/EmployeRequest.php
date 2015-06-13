<?php namespace App\Http\Requests;

use App\Http\Requests\Request;
use Illuminate\Routing\Route;

class EmployeRequest extends Request {

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
			'rfc' 		 => 'unique:employees,rfc,'.$this->route->getParameter('empleado'),	
			'date_entry' => 'required|date',
			'name'  	 => 'required',
			'date_birth' => 'date',
			'address'	 => 'required|max:250',
			'number' 	 => 'max:5',
			'pcode'      => 'numeric',
			'email'		 => 'email',
			'type'       => 'in:1,2',
			'salary'     => 'required|numeric',
			'imss'       => 'unique:employees,imss,'.$this->route->getParameter('empleado'),
			'license'	    => 'required_if:type,2|max:25',	
			'data_validate' => 'required_if:type,2|date',
			'unit' 			=> 'required_if:type,2|unique:drivers,unit,'.$this->route->getParameter('empleado')	
		];
	}

}
