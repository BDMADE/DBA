<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ValidMembersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::Create('valids',function($table){
                    
                   $table->integer('id')->primary();
                   $table->integer('membership_id')->nullable();
                   $table->string('valid')->nullable();
                   $table->string('toDate')->nullable();
                   
                   $table->string('UpToDate')->nullable();
                   
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
		Schema::Drop('valids');
	}
}
