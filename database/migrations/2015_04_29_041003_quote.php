<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Quote extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('quote', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('code', 100)->unique();
			$table->date('date');
			$table->string('contact',300);
			$table->text('observation')->nullable();			
			$table->integer('status')->default(1);
			$table->integer('issuing')->unsigned();
			$table->integer('customer')->unsigned();
			$table->foreign('issuing')->references('id')->on('users');
			$table->foreign('customer')->references('id')->on('customers');
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
		Schema::drop('quote');
	}

}
