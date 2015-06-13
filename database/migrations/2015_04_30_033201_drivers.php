<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Drivers extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('drivers', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('license',50);
			$table->date('date_validate',50);
			$table->char('type_lic',2);
			$table->integer('unit')->unsigned();
			$table->integer('employe')->unsigned();
			$table->foreign('unit')->references('id')->on('units'); 
			$table->foreign('employe')->references('id')->on('employees'); 
		
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('drivers');
	}

}
