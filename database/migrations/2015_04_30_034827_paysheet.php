<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Paysheet extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('paysheet', function(Blueprint $table)
		{
			$table->increments('id');
			$table->date('date_break');
			$table->date('date_payment');
			$table->date('date_start');
			$table->date('date_finish');			
			$table->decimal('amount');
			$table->integer('employe')->unsigned();
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
		Schema::drop('paysheet');
	}

}
