<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Units extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('units', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('plates', 20)->unique();
			$table->string('name', 100);
			$table->string('description', 250);
			$table->string('trademark', 100);
			$table->string('model', 100);
			$table->string('typo',20);
			$table->string('policy',10)->nullable();
			$table->integer('asingle');
			$table->integer('adouble');
			$table->integer('provider')->unsigned();
			$table->foreign('provider')->references('id')->on('providers');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('units');
	}

}
