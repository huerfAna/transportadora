<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Tows extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tows', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('plates', 20)->unique();
			$table->string('series', 20);
			$table->string('name', 100);
			$table->string('description', 250);
			$table->string('trademark', 100);
			$table->string('model', 100);
			$table->string('typo',20);
			$table->string('policy',10)->nullable();
			$table->integer('age');
			$table->integer('asingle');
			$table->integer('adouble');
			$table->decimal('weight');
			$table->decimal('capacity');
			$table->string('measure');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('tows');
	}

}
