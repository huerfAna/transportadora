<?php namespace App;

use Illuminate\Database\Eloquent\Model;

/** 
   **********************
   * Modelo Destinatario
   **********************
 **/
class Remission extends Model  {

	
	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'remissions';


	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected  $guarded = ['id','created_at','updated_at'];
	
	public function scopeSearch($query, $name)
	{
		if(trim($name) != '')
			$query->where("folio","like","%$name%");
	}
}
