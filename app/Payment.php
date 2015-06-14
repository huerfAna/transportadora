<?php namespace App;

use Illuminate\Database\Eloquent\Model;

/** 
   **********************
   * Modelo Destinatario
   **********************
 **/
class Payment extends Model  {

	
	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'payments';


	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected  $guarded = ['id','created_at','updated_at'];
	
	public function scopeSearch($query, $name)
	{
		if(trim($name) != '')
			$query->where("code","like","%$name%");
	}
}
