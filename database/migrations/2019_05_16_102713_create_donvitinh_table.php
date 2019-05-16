<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDonvitinhTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('donvitinh', function(Blueprint $table)
		{
			$table->integer('id')->unsigned()->primary();
			$table->string('dvt_ma', 10);
			$table->string('dvt_ten', 100);
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
		Schema::drop('donvitinh');
	}

}
