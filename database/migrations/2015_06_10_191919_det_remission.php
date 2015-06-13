<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class DetRemission extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('det_remission', function(Blueprint $table)
		{
			$table->integer('quantity');
			$table->integer('unit');
			$table->text('description');
			$table->decimal('price');
			$table->decimal('amount');			
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('det_remission');
	}

}
