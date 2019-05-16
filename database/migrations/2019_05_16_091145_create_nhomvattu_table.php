<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateNhomvattuTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('nhomvattu', function(Blueprint $table)
		{
			$table->integer('id')->unsigned()->primary();
			$table->string('nvt_ma', 10);
			$table->string('nvt_ten', 100);
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
		Schema::drop('nhomvattu');
	}

}
