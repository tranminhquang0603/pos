<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateChuyenkhoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('chuyenkho', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('ck_ma', 30);
			$table->date('ck_ngay');
			$table->string('ck_lydo', 200);
			$table->integer('nv_id')->unsigned()->index('nv_id');
			$table->decimal('ck_tongtien', 10);
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
		Schema::drop('chuyenkho');
	}

}
