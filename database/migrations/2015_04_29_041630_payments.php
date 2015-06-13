<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Payments extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('payments', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('code', 100)->unique();
			$table->date('date');
			$table->text('observation')->nullable();
			$table->decimal('total');	
			$table->decimal('tpayment')->nullable();
			$table->decimal('balance');
			$table->integer('status')->default(1);
			$table->integer('provider')->unsigned();
			$table->foreign('provider')->references('id')->on('providers');
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
		Schema::drop('payments');
	}

}
