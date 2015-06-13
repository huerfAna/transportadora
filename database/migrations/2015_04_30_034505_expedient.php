<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Expedient extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('expedient', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('file',200);
			$table->text('description',200);
			$table->integer('employe')->unsigned();
			$table->foreign('employe')->references('id')->on('employees'); 
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('expedient');
	}

}
