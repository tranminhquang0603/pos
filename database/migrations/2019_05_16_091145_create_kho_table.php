<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateKhoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('kho', function(Blueprint $table)
		{
			$table->integer('id')->unsigned()->primary();
			$table->string('kho_ma', 10);
			$table->string('kho_ten', 100);
			$table->string('kho_lienhe', 100);
			$table->string('kho_diachi', 200);
			$table->char('kho_sdt', 20);
			$table->string('kho_quanly', 100);
			$table->string('kho_ghichu', 200);
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
		Schema::drop('kho');
	}

}
