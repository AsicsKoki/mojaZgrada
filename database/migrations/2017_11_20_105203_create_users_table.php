<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUsersTable extends Migration {

	public function up()
	{
		Schema::create('users', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->softDeletes();
			$table->string('first_name', 50);
			$table->string('last_name', 50);
			$table->integer('apartment_number');
			$table->string('email', 100)->unique();
			$table->string('phone', 50);
			$table->integer('number_of_occupants');
			$table->string('street',100);
			$table->integer('building_number');
			$table->rememberToken();
		});
	}

	public function down()
	{
		Schema::dropIfExists('user');
	}
}