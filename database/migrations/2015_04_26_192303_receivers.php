<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Receivers extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('receivers', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('rfc', 100)->unique();
			$table->string('rsocial', 250);
			$table->string('address', 250);
			$table->string('number',5)->nullable();
			$table->string('colony', 200)->nullable();
			$table->string('city', 250);
			$table->string('pcode', 10)->nullable();
			$table->string('phone', 25)->nullable();
			$table->string('email', 250)->nullable();
			$table->string('account', 4)->nullable();	
			$table->boolean('status')->default(true);
			$table->integer('company')->unsigned();
			$table->integer('customer')->unsigned();
			$table->foreign('company')->references('id')->on('companies');
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
		Schema::drop('receivers');
	}
}
