<?php namespace App\Http\Requests;

use App\Http\Requests\Request;
use Illuminate\Routing\Route;

class ReceiverRequest extends Request {

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
			'rfc' 		 => 'required|unique:receivers,rfc,'.$this->route->getParameter('destinatario'),	
			'rsocial'    => 'required',
			'address'  	 => 'required|max:250',
			'number'     => 'max:4',
			'colony'	 => 'max:250',
			'city' 	     => 'max:5',
			'pcode'      => 'numeric',
			'email'		 => 'email',
			'account'    => 'max:4',
			'customer'   => 'required'

		];
	}

}
