<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateNhapkhoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('nhapkho', function(Blueprint $table)
		{
			$table->integer('id')->unsigned()->primary();
			$table->string('nk_ma', 30);
			$table->date('nk_ngaylap');
			$table->string('nk_lydo', 200);
			$table->decimal('nk_tongtien', 10);
			$table->integer('npp_id')->unsigned()->index('nhapkho_npp_id_foreign');
			$table->integer('nv_id')->unsigned()->index('nhapkho_nv_id_foreign');
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
		Schema::drop('nhapkho');
	}

}
