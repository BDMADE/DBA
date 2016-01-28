<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UserRoleTabel extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::Create('roles',function($table){
                    
                   $table->integer('id')->primary();
                   $table->string('role')->nullable();
                   
                   $table->integer('created_by_id')->nullable();
                   $table->integer('updated_by_id')->nullable();     
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
		Schema::Drop('roles');
	}

}
