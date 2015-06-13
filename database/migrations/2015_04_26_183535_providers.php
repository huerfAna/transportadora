<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Providers extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('providers', function(Blueprint $table)
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
			$table->string('account',100)->nullable();	
			$table->integer('credit')->nullable();	
			$table->boolean('status')->default(true);
			$table->integer('company')->unsigned();
			$table->foreign('company')->references('id')->on('companies'); 
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
		Schema::drop('providers');
	}

}
