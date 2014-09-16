<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSerie extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('serie', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('nombre',100);
			$table->integer('canal_id')->unsigned();
			$table->integer('horario_id')->unsigned();
			$table->timestamps();
			$table->foreign('canal_id')->references('id')->on('canal')->onDelete('cascade');
			$table->foreign('horario_id')->references('id')->on('horario')->onDelete('cascade');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('serie');
	}

}
