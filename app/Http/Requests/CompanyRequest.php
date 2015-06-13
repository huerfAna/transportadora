<?php namespace App\Http\Requests;

use App\Http\Requests\Request;
use Illuminate\Routing\Route;

class CompanyRequest extends Request {

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
		return [
			'name' 	    => 'required|unique:companies,name,'.$this->route->getParameter('empresa'),	
			'rfc'		=> 'max:50',
			'number'    => 'max:5',
			'rsocial' 	=> 'required',
			'address'   => 'required',
			'image'     => 'mimes:jpg,png',
			'phone'     => 'numeric'
		];
	}

}
