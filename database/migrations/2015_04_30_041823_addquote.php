<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Addquote extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('addquote', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('road')->unsigned();
			$table->integer('unit')->unsigned();
			$table->integer('idquote')->unsigned();
			$table->foreign('road')->references('id')->on('roads');
			$table->foreign('unit')->references('id')->on('units');
			$table->foreign('idquote')->references('id')->on('quote');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('addquote');
	}

}
