<?php namespace App;

use Illuminate\Database\Eloquent\Model;

/** 
   ******************
   * Modelo Empleado
   ******************
 **/
class Employe extends Model  {

	
	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'employees';


	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected  $guarded = ['id','created_at','updated_at'];

	public static function filterAndPaginate($name, $type)
	{
		return Employe::search($name)->type($type)->paginate(10);
	}
	public function scopeSearch($query, $name)
	{

		if(trim($name) != '')
			$query->where("name","like","%$name%")->orwhere("rfc","like","%$name%");

	}
	public function scopeType($query, $type)
	{
		$types = config('options.types');

		if($type != "" && isset($types[$type]))
			$query->where("type",$type);
	}

}
