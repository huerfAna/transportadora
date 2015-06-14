<?php namespace App;

use Illuminate\Database\Eloquent\Model;

/** 
   **********************
   * Modelo Destinatario
   **********************
 **/
class DetRemission extends Model  {

	
	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'det_remission';
	public $timestamps = false;


	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected  $guarded = ['id'];
	

}
