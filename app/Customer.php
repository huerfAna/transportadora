<?php namespace App;

use Illuminate\Database\Eloquent\Model;

/** 
   ******************
   * Modelo Cliente
   ******************
 **/
class Customer extends Model  {

	
	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'customers';


	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected  $guarded = ['id','created_at','updated_at'];

	public function getShortRazonAttribute()
	{
		return substr($this->rsocial, 0, 15).'...';
	}
	public function getShortCalleAttribute()
	{
		return substr($this->address, 0, 15).'...';
	}
	public function scopeSearch($query, $name)
	{
		if(trim($name) != '')
			$query->where("rfc","like","%$name%")->orwhere("rsocial","like","%$name%");
	}

}
