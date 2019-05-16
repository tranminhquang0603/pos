<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateVattuTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('vattu', function(Blueprint $table)
		{
			$table->integer('id')->unsigned()->primary();
			$table->char('vt_ma', 10);
			$table->string('vt_ten', 100);
			$table->decimal('vt_gia', 10, 0);
			$table->integer('dvt_id')->unsigned()->index('vattu_dvt_id_foreign');
			$table->integer('nvt_id')->unsigned()->index('vattu_nvt_id_foreign');
			$table->integer('cl_id')->unsigned()->index('vattu_cl_id_foreign');
			$table->integer('npp_id')->unsigned()->index('vattu_npp_id_foreign');
			$table->integer('nsx_id')->unsigned()->index('vattu_nsx_id_foreign');
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
		Schema::drop('vattu');
	}

}
