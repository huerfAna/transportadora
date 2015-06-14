<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

use Illuminate\Routing\Route;

class DetRemissionRequest extends Request {

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
			'quantity'     => 'required|numeric',	
			'unit'      => 'required',
			'description'  => 'required',
			'price'  => 'required|numeric',
			'amount' 	=> 'required|numeric'
			];
	}

}
