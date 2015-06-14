<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

use Illuminate\Routing\Route;

class PaymentRequest extends Request {

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
			'code'     => 'required|unique:payments,code,'.$this->route->getParameter('contrarecibo'),	
			'date'      => 'required|date',
			'provider'  => 'required',			
			'observation'  => 'max:400'
		];
	}

}
