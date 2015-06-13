<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Companies extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('companies', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('name', 100);
			$table->string('rsocial', 250);
			$table->string('rfc', 20);
			$table->string('address', 250);
			$table->string('number',5)->nullable();;
			$table->string('colony', 150);
			$table->string('location', 150);
			$table->string('city', 150);
			$table->string('phone', 20)->nullable();;
			$table->string('image')->nullable();
			$table->boolean('status')->default(true);
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
		Schema::drop('companies');
	}

}
