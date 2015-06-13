<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Employees extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('employees', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('code', 100)->unique();
			$table->date('date_entry');
			$table->string('name', 500);
			$table->date('date_birth')->nullable();
			$table->string('address', 250)->nullable();
			$table->string('number',5)->nullable();
			$table->string('colony', 200)->nullable();
			$table->string('city', 250);
			$table->string('state', 250);
			$table->string('pcode', 10)->nullable();
			$table->string('phone', 25)->nullable();
			$table->string('cphone', 25)->nullable();
			$table->string('nextel', 25)->nullable();
			$table->string('email', 250)->nullable();
			$table->string('imss',50)->nullable();
			$table->date('date_imss')->nullable();
			$table->string('ife',50)->nullable();
			$table->integer('type');
			$table->decimal('salary');
			$table->string('photo')->nullable();
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
		Schema::drop('employees');
	}

}
