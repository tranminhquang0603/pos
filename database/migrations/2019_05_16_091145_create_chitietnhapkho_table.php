<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateChitietnhapkhoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('chitietnhapkho', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('ctnk_soluong');
			$table->decimal('ctnk_thanhtien', 10);
			$table->integer('vt_id')->unsigned()->nullable()->index('chitietnhapkho_vt_id_foreign');
			$table->integer('nk_id')->unsigned()->index('chitietnhapkho_nk_id_foreign');
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
		Schema::drop('chitietnhapkho');
	}

}
