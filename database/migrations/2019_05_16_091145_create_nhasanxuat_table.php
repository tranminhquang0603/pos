<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateNhasanxuatTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('nhasanxuat', function(Blueprint $table)
		{
			$table->integer('id')->unsigned()->primary();
			$table->char('nsx_ma', 10);
			$table->string('nsx_ten', 100);
			$table->integer('kv_id')->unsigned()->index('nhasanxuat_kv_id_foreign');
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
		Schema::drop('nhasanxuat');
	}

}
