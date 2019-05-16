<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateChitietxuatkhoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('chitietxuatkho', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('ctxk_soluong');
			$table->decimal('ctxk_thanhtien', 10);
			$table->integer('vt_id')->unsigned()->index('chitietxuatkho_vt_id_foreign');
			$table->integer('xk_id')->unsigned()->index('chitietxuatkho_xk_id_foreign');
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
		Schema::drop('chitietxuatkho');
	}

}
