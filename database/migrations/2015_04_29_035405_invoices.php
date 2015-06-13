<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Remissions extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('remissions', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('folio', 100)->unique();
			$table->date('date');
			$table->integer('customer');
			$table->integer('receiver');
			$table->integer('driver');
			$table->text('observation')->nullable();
			$table->decimal('subtotal');	
			$table->decimal('iva');
			$table->decimal('total');
			$table->integer('status');
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
		Schema::drop('remissions');
	}

}
