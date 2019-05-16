<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateVattukhoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('vattukho', function(Blueprint $table)
		{
			$table->integer('id')->unsigned()->primary();
			$table->integer('vt_id')->unsigned()->index('vattukho_vt_id_foreign');
			$table->integer('kho_id')->unsigned()->index('vattukho_kho_id_foreign');
			$table->integer('sl_nhap');
			$table->integer('sl_xuat');
			$table->integer('sl_ton');
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
		Schema::drop('vattukho');
	}

}
