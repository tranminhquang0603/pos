<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateThongtincongtyTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('thongtincongty', function(Blueprint $table)
		{
			$table->integer('id')->unsigned()->primary();
			$table->string('cty_ten', 200);
			$table->string('cty_diachi', 200);
			$table->char('cty_sdt', 20);
			$table->char('cty_fax', 20);
			$table->string('cty_web', 50);
			$table->string('cty_email', 50);
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
		Schema::drop('thongtincongty');
	}

}
