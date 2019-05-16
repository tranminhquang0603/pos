<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateNhaphanphoiTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('nhaphanphoi', function(Blueprint $table)
		{
			$table->integer('id')->unsigned()->primary();
			$table->char('npp_ma', 10);
			$table->string('npp_ten', 100);
			$table->string('npp_diachi', 200);
			$table->char('npp_sdt', 20);
			$table->char('npp_fax', 20);
			$table->string('npp_taikhoan', 50);
			$table->string('npp_email');
			$table->string('npp_nhanviendaidien', 200);
			$table->integer('kv_id')->unsigned()->index('nhaphanphoi_kv_id_foreign');
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
		Schema::drop('nhaphanphoi');
	}

}
