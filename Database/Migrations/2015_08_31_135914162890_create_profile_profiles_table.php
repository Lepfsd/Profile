<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProfileProfilesTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('profile__profiles', function(Blueprint $table) {
			$table->engine = 'InnoDB';
      $table->increments('id');
	    $table->integer('user_id')->unsigned();
	    $table->string('tel')->nullable();
			$table->string('mobile')->nullable();
			$table->string('place')->nullable();
	    $table->string('company')->nullable();
 	    $table->text('additional')->nullable();
	    $table->string('website')->nullable();
			$table->string('cover')->nullable();
			$table->string('verify')->nullable();
	   
	
	    $table->timestamps();
	    $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('profile__profiles');
	}
}
