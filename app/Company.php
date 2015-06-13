<?php namespace App;

use Illuminate\Database\Eloquent\Model;

/** 
   ******************
   * Modelo Empresa
   ******************
 **/
class Company extends Model  {

	
	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'companies';


	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected  $guarded = ['id','created_at','updated_at'];

}
