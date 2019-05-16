<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateXuatkhoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('xuatkho', function(Blueprint $table)
		{
			$table->integer('id')->unsigned()->primary();
			$table->string('xk_ma', 30);
			$table->date('xk_ngaylap');
			$table->string('xk_diachi');
			$table->string('xk_lydo', 200);
			$table->decimal('xk_tongtien', 10);
			$table->integer('ct_id')->unsigned()->index('xuatkho_ct_id_foreign');
			$table->integer('nv_id')->unsigned()->index('xuatkho_user_id_foreign');
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
		Schema::drop('xuatkho');
	}

}
