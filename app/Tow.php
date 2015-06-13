<?php namespace App;

use Illuminate\Database\Eloquent\Model;

/** 
   ******************
   * Modelo Remolque
   ******************
 **/
class Tow extends Model  {

	
	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'tows';
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
			$query->where("name","like","%$name%")->orwhere("plates","like","%$name%");
	}
}
