<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableEmpresas extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
				Schema::create('empresas', function($table){
				$table->increments('id');
				
				$table->integer('user_id');
				$table->foreign('user_id')->references('id')->on('users');
				$table->integer('sector_id');
				$table->foreign('sector_id')->references('id')->on('sectores');
				$table->string('razon_social');
				$table->string('logo');
				
				
				
				
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
		Schema::drop('empresas');
		
	}

}
