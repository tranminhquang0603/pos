<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateNhanvienTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('nhanvien', function(Blueprint $table)
		{
			$table->increments('id');
			$table->char('nv_ma', 10);
			$table->string('nv_ten', 100);
			$table->string('nv_gioitinh', 10);
			$table->date('nv_ngaysinh');
			$table->string('nv_diachi', 200);
			$table->char('nv_cmnd', 15);
			$table->char('nv_sdt', 20);
			$table->string('nv_email');
			$table->date('nv_ngayvaolam');
			$table->integer('user_id')->unsigned()->index('fk_group');
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
		Schema::drop('nhanvien');
	}

}
