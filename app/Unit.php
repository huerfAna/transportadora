<?php namespace App;

use Illuminate\Database\Eloquent\Model;

/** 
   ******************
   * Modelo Unidad
   ******************
 **/
class Unit extends Model  {

	
	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'units';

	public $timestamps = false;
	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected  $guarded = ['id'];
	
	public function scopeSearch($query, $name)
	{
		if(trim($name) != '')
			$query->where("unit_number","like","%$name%")->orwhere("plates","like","%$name%");
	}

}
