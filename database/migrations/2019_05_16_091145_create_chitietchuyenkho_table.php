<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateChitietchuyenkhoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('chitietchuyenkho', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('ctck_soluong');
			$table->decimal('ctck_thanhtien', 10);
			$table->integer('vt_id')->unsigned()->index('chitietchuyenkho_vt_id_foreign');
			$table->integer('ck_id')->unsigned()->index('chitietchuyenkho_ck_id_foreign');
			$table->integer('khocu_id')->unsigned()->index('chitietchuyenkho_khocu_id_foreign');
			$table->integer('khomoi_id')->unsigned()->index('chitietchuyenkho_khomoi_id_foreign');
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
		Schema::drop('chitietchuyenkho');
	}

}
